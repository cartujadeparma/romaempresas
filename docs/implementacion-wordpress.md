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
  alternativa, no usada por esta implementación. Sus patrones de bloques
  (`patterns/*.php`, usados por `front-page.html`, `page.html`, `404.html`,
  etc.) vienen originalmente en inglés con textos y datos de contacto de
  demostración ("RoadFleet Logistics", direcciones/teléfonos de EE. UU.,
  testimonios en *lorem ipsum*); ya están traducidos al español y adaptados
  a **Inversiones & Transporte Roma** (textos, botones, menú, footer, 404,
  barra lateral), con los enlaces apuntando a las páginas reales del sitio.
  El teléfono, correo, dirección y redes sociales del footer ya usan los
  datos reales de la empresa (ver paso 4 de la sección 4 para el detalle y
  una nota sobre el correo con tilde).
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
  plantilla *Header*) ya trae los enlaces en español apuntando a las
  páginas reales de primer nivel (Inicio, Nosotros, Servicios, Blog,
  Contacto...), pero es un menú plano: no incluye los desplegables con las
  subpáginas y **no** está enlazado al "Menú principal" importado por el
  WXR, porque esa asociación vive en la base de datos, no en archivos del
  repositorio — hay que enlazarlo manualmente (paso 2 de la sección 4) para
  tener el árbol completo con desplegables.

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
2. **Ubicación del menú**: los patrones del tema (`patterns/header.php` y
   `patterns/footer.php`) ya traen los enlaces en español y apuntando a las
   páginas reales de primer nivel (Inicio, Nosotros, Servicios, Blog,
   Contacto...), pero son un menú plano, sin los desplegables con las
   subpáginas. Para tener el árbol completo con desplegables: `Apariencia >
   Editor` (editor de sitio, porque Trucking Services es un tema de
   bloques) → edita la parte de plantilla **Header** → selecciona el bloque
   **Navigation** → en sus opciones, *Importar menú clásico* / *Seleccionar
   menú* → elige **"Menú principal"**. Guarda la parte de plantilla.
3. **Enlace de WhatsApp**: el ítem *WhatsApp* del menú ya apunta a
   `https://wa.me/51936820612` (número real de la empresa). Si se desea, se
   le puede añadir un mensaje predefinido vía `?text=` editando el ítem en
   `Apariencia > Menús` o desde el propio bloque Navigation.
4. **Datos de contacto del tema**: `patterns/footer.php`, `patterns/sidebar.php`
   y el enlace de WhatsApp del menú (WXR) ya usan los datos reales de la
   empresa:
   - Teléfono / WhatsApp: `+51 936 820 612` (`https://wa.me/51936820612`).
   - Correo: `atenciónalcliente@romaempresas.com`. **Nota técnica**: la
     tilde en "atención" hace que este correo no sea válido para todos los
     clientes de email (la parte anterior a la `@` debería ser ASCII para
     máxima compatibilidad SMTP). Si al probar el enlace `mailto:` o al
     recibir/enviar desde esta cuenta hay problemas de entrega, considera
     usar una variante sin tilde (p. ej. `atencionalcliente@romaempresas.com`)
     y actualizar `footer.php` en consecuencia.
   - Dirección: `Jr. El Tesoro 497, Urb. Túpac Amaru, San Luis, Lima 15021,
     Perú`, enlazada a una búsqueda de Google Maps.
   - Redes sociales: solo **Facebook**
     (`https://www.facebook.com/profile.php?id=100064050996376`) y
     **WhatsApp** están publicados en el footer y en la barra lateral del
     blog; Instagram, LinkedIn y TikTok se quitaron porque la empresa
     todavía no tiene esas cuentas — vuelve a añadirlas (en
     `patterns/footer.php` y `patterns/sidebar.php`, bloque
     `wp:social-links`) cuando existan.
   Estos valores se pueden editar directamente en
   `wp-content/themes/trucking-services/patterns/footer.php` y
   `patterns/sidebar.php`, o desde el editor de sitio una vez que WordPress
   haya generado una copia personalizada de esas partes de plantilla.
5. **Formularios**: crea los formularios en `Contact > Formularios de
   contacto` (Contact Form 7) para "Solicitar cotización" (tipo de carga,
   origen/destino, volumen, fecha) y "Formulario de contacto" (nombre,
   empresa, mensaje), y pega el shortcode `[contact-form-7 ...]` resultante
   en el contenido de cada página importada.
6. **Publicar las páginas**: se importan como *borrador* a propósito, para
   que el contenido de marcador de posición no quede visible públicamente
   hasta que el equipo de contenido redacte el texto final de cada página
   (ver columna "Contenido clave" en `estructura-sitio-web.md`) y las
   publique.
7. **Permalinks**: `Ajustes > Enlaces permanentes` → estructura
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
