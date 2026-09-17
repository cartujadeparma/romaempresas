# Implementación de la estructura en WordPress

Este documento explica cómo llevar `docs/estructura-sitio-web.md` a un sitio
WordPress funcional a partir de los archivos incluidos en este repositorio,
usando el tema **Trucking Services**.

## 1. Qué incluye este repositorio

- **Instalación base de WordPress** (núcleo + Akismet).
- **Tema `wp-content/themes/trucking-services`** — tema de bloques (FSE) de
  theclassictemplates.com, orientado a transporte/logística. Es el tema con
  el que se implementa la estructura definida (ver sección 2). El repositorio
  también incluye `wp-content/themes/transcargo-transportation` como
  alternativa, no usada por esta implementación.
- **Plugins recomendados por el propio tema** (vía TGM, ya vendorizados en
  `wp-content/plugins`): **Contact Form 7** (formularios) y **Classic Blog
  Grid** (listado de Blog/Noticias).
- **`wp-content/mu-plugins/roma-site-structure.php`** — must-use plugin que
  registra los tipos de contenido personalizados recomendados en el punto 5
  de `estructura-sitio-web.md`:
  - `vehiculo` (con la taxonomía `categoria_flota`: *Carga pesada* /
    *Vehículos menores*), para alimentar las páginas de Flota.
  - `testimonio` (con los campos `empresa_cliente` y `cargo_autor`), para
    alimentar Clientes / Experiencia.
  Al activarse automáticamente (carpeta `mu-plugins`), no requiere pasos
  adicionales: se registra en cuanto WordPress carga, independientemente del
  tema activo.
- **`docs/wxr-estructura-sitio.xml`** — archivo de exportación/importación
  de WordPress (WXR) con las **33 páginas** del árbol de navegación (todas
  como borrador, con un párrafo de marcador de posición describiendo su
  contenido) ya organizadas en la jerarquía padre/hijo correcta, más el
  **"Menú principal"** con los mismos 9 elementos de primer nivel y sus
  desplegables. No fija ninguna plantilla de página específica: al no
  indicar una, cada página usa automáticamente la plantilla `page` del tema
  (portada con imagen de cabecera + contenido), que ya es la esperada para
  las 33 páginas.

## 2. Cómo se ve la estructura en Trucking Services

El tema es de **edición completa del sitio** (Full Site Editing, bloques),
no de plantillas PHP clásicas, así que aplica la estructura así:

- **`templates/front-page.html`** se activa automáticamente en cuanto
  **Inicio** quede configurada como página de inicio estática (paso 1 de la
  sección 3). Ese template ignora el contenido propio de la página y arma el
  home con los patrones del tema: *Banner*, *Service Section*, *Plan
  Section* y *Testimonial Section* — coincide con el diseño de Inicio
  descrito en `estructura-sitio-web.md` (hero, servicios, testimonios).
- **`templates/page.html`** (la plantilla por defecto, usada por las otras
  32 páginas) ya antepone el patrón *Cover Single Page* (imagen de cabecera
  + título) al contenido de la página, dando una apariencia consistente sin
  necesidad de asignar plantillas una por una.
- El menú de navegación del tema (bloque *Navigation* dentro de la parte de
  plantilla *Header*) trae por defecto enlaces de demostración (Home, About,
  Services, Blog, Contact...). **No** apunta automáticamente al "Menú
  principal" importado por el WXR — hay que enlazarlos manualmente (paso 2
  de la sección 3), porque esa asociación vive en la base de datos, no en
  archivos del repositorio.

## 3. Pasos para importar la estructura

1. Sube este repositorio al hosting/entorno donde correrá el sitio y crea
   `wp-config.php` (no incluido, contiene credenciales) apuntando a la base
   de datos definitiva. Completa la instalación de WordPress (usuario admin,
   idioma, etc.) si aún no lo está.
2. Activa el tema **Trucking Services** en `Apariencia > Temas`. Al
   activarlo, el propio tema mostrará un aviso (TGM) para instalar/activar
   **Contact Form 7** y **Classic Blog Grid**; actívalos desde ese aviso o
   desde `Plugins` (ya están en el repositorio, no hace falta descargarlos).
3. Instala/activa el plugin oficial **WordPress Importer**
   (`Herramientas > Importar > WordPress`).
4. Importa `docs/wxr-estructura-sitio.xml`. Cuando pregunte por el autor,
   asígnalo a tu usuario administrador. **No** marques la descarga de
   adjuntos (el archivo no referencia imágenes).
5. Verifica en `Páginas` que se crearon las 33 páginas con la jerarquía
   esperada (revisa `docs/estructura-sitio-web.md`, sección 2, para
   contrastar el árbol completo) y en `Apariencia > Menús` que existe
   **"Menú principal"** con el mismo árbol, incluyendo el enlace externo
   *WhatsApp* dentro de *Contacto*.

## 4. Pasos manuales que WordPress no permite automatizar por importación

Estos ajustes viven en la tabla de opciones del sitio (o en el editor de
sitio), no en el contenido, así que deben hacerse una vez desde el panel:

1. **Página de inicio estática**: `Ajustes > Lectura` → *La página muestra* →
   *Una página estática* → Página de inicio: **Inicio**; Página de entradas:
   **Blog / Noticias**. Esto activa `templates/front-page.html` del tema
   automáticamente (ver sección 2).
2. **Ubicación del menú**: `Apariencia > Editor` (editor de sitio, porque
   Trucking Services es un tema de bloques) → edita la parte de plantilla
   **Header** → selecciona el bloque **Navigation** → en sus opciones,
   *Importar menú clásico* / *Seleccionar menú* → elige **"Menú principal"**.
   Esto reemplaza los enlaces de demostración (Home, About, Services...) por
   el árbol real de 9 secciones. Guarda la parte de plantilla.
3. **Enlace real de WhatsApp**: edita el ítem *WhatsApp* del menú (en
   `Apariencia > Menús` o desde el propio bloque Navigation) y reemplaza
   `https://wa.me/51XXXXXXXXX` por el número real de la empresa (y, si se
   desea, un mensaje predefinido vía `?text=`).
4. **Formularios**: crea los formularios en `Contact > Formularios de
   contacto` (Contact Form 7) para "Solicitar cotización" (tipo de carga,
   origen/destino, volumen, fecha) y "Formulario de contacto" (nombre,
   empresa, mensaje), y pega el shortcode `[contact-form-7 ...]` resultante
   en el contenido de cada página importada.
5. **Publicar las páginas**: se importan como *borrador* a propósito, para
   que el contenido de marcador de posición no quede visible públicamente
   hasta que el equipo de contenido redacte el texto final de cada página
   (ver columna "Contenido clave" en `estructura-sitio-web.md`) y las
   publique.
6. **Permalinks**: `Ajustes > Enlaces permanentes` → estructura
   `/%postname%/` (recomendado en la sección 8 del documento de
   estructura).

## 5. Siguientes pasos de desarrollo

- Cargar unidades reales como entradas del CPT `Vehículo` (clasificadas en
  `categoria_flota`) para que "Vehículos de carga pesada" y "Vehículos
  menores" muestren listados dinámicos en vez de contenido estático. El
  archivo de este CPT (`/flota/vehiculos/`) usa la plantilla genérica
  `archive.html` del tema; si el resultado no convence visualmente, se puede
  crear una plantilla de bloques específica desde el editor de sitio.
- Cargar testimonios reales como entradas del CPT `Testimonio` para la
  página Clientes / Experiencia, o reutilizar el patrón *Testimonial
  Section* del tema con esos datos.
- Configurar **Classic Blog Grid** para el listado de "Blog / Noticias"
  (Ajustes del plugin / bloque específico según su documentación).
- Revisar el resto de los plugins sugeridos en la sección 7 de
  `estructura-sitio-web.md` (SEO, mapa, caché, WhatsApp flotante) que no
  vienen con el tema y siguen pendientes de instalación.
