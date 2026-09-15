# Implementación de la estructura en WordPress

Este documento explica cómo llevar `docs/estructura-sitio-web.md` a un sitio
WordPress funcional a partir de los archivos incluidos en este repositorio.

## 1. Qué incluye este repositorio

- **Instalación base de WordPress** (núcleo + temas por defecto + Akismet).
- **`wp-content/mu-plugins/roma-site-structure.php`** — must-use plugin que
  registra los tipos de contenido personalizados recomendados en el punto 5
  de `estructura-sitio-web.md`:
  - `vehiculo` (con la taxonomía `categoria_flota`: *Carga pesada* /
    *Vehículos menores*), para alimentar las páginas de Flota.
  - `testimonio` (con los campos `empresa_cliente` y `cargo_autor`), para
    alimentar Clientes / Experiencia.
  Al activarse automáticamente (carpeta `mu-plugins`), no requiere pasos
  adicionales: se registra en cuanto WordPress carga.
- **`docs/wxr-estructura-sitio.xml`** — archivo de exportación/importación
  de WordPress (WXR) con las **33 páginas** del árbol de navegación (todas
  como borrador, con un párrafo de marcador de posición describiendo su
  contenido) ya organizadas en la jerarquía padre/hijo correcta, más el
  **"Menú principal"** con los mismos 9 elementos de primer nivel y sus
  desplegables.

## 2. Pasos para importar la estructura

1. Sube este repositorio al hosting/entorno donde correrá el sitio y crea
   `wp-config.php` (no incluido, contiene credenciales) apuntando a la base
   de datos definitiva. Completa la instalación de WordPress (usuario admin,
   idioma, etc.) si aún no lo está.
2. Instala/activa el plugin oficial **WordPress Importer**
   (`Herramientas > Importar > WordPress`).
3. Importa `docs/wxr-estructura-sitio.xml`. Cuando pregunte por el autor,
   asígnalo a tu usuario administrador. **No** marques la descarga de
   adjuntos (el archivo no referencia imágenes).
4. Verifica en `Páginas` que se crearon las 33 páginas con la jerarquía
   esperada (revisa `docs/estructura-sitio-web.md`, sección 2, para
   contrastar el árbol completo) y en `Apariencia > Menús` que existe
   **"Menú principal"** con el mismo árbol, incluyendo el enlace externo
   *WhatsApp* dentro de *Contacto*.

## 3. Pasos manuales que WordPress no permite automatizar por importación

Estos ajustes viven en la tabla de opciones del sitio, no en el contenido, así
que deben hacerse una vez desde el panel:

1. **Página de inicio estática**: `Ajustes > Lectura` → *La página muestra* →
   *Una página estática* → Página de inicio: **Inicio**; Página de entradas:
   **Blog / Noticias**.
2. **Ubicación del menú**: `Apariencia > Menús` (o el editor de sitio si usas
   un tema de bloques) → asigna **"Menú principal"** a la ubicación de
   navegación principal del tema que finalmente se instale.
3. **Enlace real de WhatsApp**: edita el ítem *WhatsApp* del menú y
   reemplaza `https://wa.me/51XXXXXXXXX` por el número real de la empresa
   (y, si se desea, un mensaje predefinido vía `?text=`).
4. **Publicar las páginas**: se importan como *borrador* a propósito, para
   que el contenido de marcador de posición no quede visible públicamente
   hasta que el equipo de contenido redacte el texto final de cada página
   (ver columna "Contenido clave" en `estructura-sitio-web.md`) y las
   publique.
5. **Permalinks**: `Ajustes > Enlaces permanentes` → estructura
   `/%postname%/` (recomendado en la sección 8 del documento de
   estructura).

## 4. Siguientes pasos de desarrollo

- Elegir/instalar el tema definitivo (los temas por defecto incluidos son
  solo temporales) y construir sobre él las plantillas descritas en la
  sección 6 de `estructura-sitio-web.md`.
- Cargar unidades reales como entradas del CPT `Vehículo` (clasificadas en
  `categoria_flota`) para que "Vehículos de carga pesada" y "Vehículos
  menores" muestren listados dinámicos en vez de contenido estático.
- Cargar testimonios reales como entradas del CPT `Testimonio` para la
  página Clientes / Experiencia.
- Instalar los plugins sugeridos en la sección 7 (formularios, SEO, mapa,
  caché, WhatsApp flotante) y construir los formularios de "Solicitar
  cotización" y "Formulario de contacto".
