# Estructura del sitio web — Roma Empresas (WordPress)

Documento de planificación para implementar en WordPress la arquitectura de información
de la empresa de transporte de carga. Define el árbol completo de páginas, slugs,
jerarquía padre/hijo, plantillas sugeridas, tipos de contenido y configuración de menús
necesarios para construir el sitio.

## 1. Enfoque general

- **34 páginas** en total (1 home + 8 secciones de nivel 1 + 24 subpáginas), más el
  archivo de **Blog/Noticias** (entradas nativas de WordPress).
- Cada rama del menú (Nosotros, Servicios, Flota, Sectores, Seguridad y Operaciones,
  Contacto) se implementa como una **página padre** con contenido resumen (landing de
  sección) y sus ítems como **páginas hijas** (`Página > Atributos de página > Página
  padre`), lo que genera automáticamente el desplegable en el menú y URLs jerárquicas.
- "Clientes / Experiencia" y "Blog / Noticias" son ítems de nivel 1 sin subpáginas.
- "WhatsApp" dentro de Contacto se resuelve como **enlace directo** (`wa.me`) en el menú,
  no como página de WordPress (ver sección 5).

## 2. Mapa del sitio (árbol completo)

```
Inicio (/)
├── Nosotros (/nosotros/)
│   ├── Quiénes somos (/nosotros/quienes-somos/)
│   ├── Nuestra experiencia (/nosotros/nuestra-experiencia/)
│   ├── Misión y visión (/nosotros/mision-y-vision/)
│   └── Seguridad y compromiso (/nosotros/seguridad-y-compromiso/)
│
├── Servicios (/servicios/)
│   ├── Transporte de carga pesada (/servicios/transporte-de-carga-pesada/)
│   ├── Transporte de carga general (/servicios/transporte-de-carga-general/)
│   ├── Transporte corporativo (/servicios/transporte-corporativo/)
│   ├── Transporte con vehículos menores (/servicios/transporte-con-vehiculos-menores/)
│   └── Servicios especiales (/servicios/servicios-especiales/)
│
├── Flota (/flota/)
│   ├── Vehículos de carga pesada (/flota/vehiculos-de-carga-pesada/)
│   ├── Vehículos menores (/flota/vehiculos-menores/)
│   └── Características de la flota (/flota/caracteristicas-de-la-flota/)
│
├── Sectores (/sectores/)
│   ├── Minería (/sectores/mineria/)
│   ├── Construcción (/sectores/construccion/)
│   ├── Industria (/sectores/industria/)
│   ├── Comercio (/sectores/comercio/)
│   └── Otros sectores (/sectores/otros-sectores/)
│
├── Seguridad y Operaciones (/seguridad-y-operaciones/)
│   ├── Gestión de seguridad (/seguridad-y-operaciones/gestion-de-seguridad/)
│   ├── Mantenimiento de flota (/seguridad-y-operaciones/mantenimiento-de-flota/)
│   ├── Gestión de conductores (/seguridad-y-operaciones/gestion-de-conductores/)
│   └── Control y monitoreo (/seguridad-y-operaciones/control-y-monitoreo/)
│
├── Clientes / Experiencia (/clientes/)
│
├── Blog / Noticias (/blog/)  [archivo de entradas]
│
└── Contacto (/contacto/)
    ├── Solicitar cotización (/contacto/solicitar-cotizacion/)
    ├── Formulario de contacto (/contacto/formulario-de-contacto/)
    ├── WhatsApp → enlace directo https://wa.me/51XXXXXXXXX (sin página propia)
    └── Ubicación (/contacto/ubicacion/)
```

## 3. Detalle de páginas

Leyenda de plantillas: **Landing** (portada de sección con resumen + tarjetas hacia sus
hijas), **Estándar** (contenido de texto/imágenes), **Servicio**, **Vehículo/Flota**,
**Sector**, **Formulario**, **Mapa**.

### 3.1 Inicio

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Inicio | `/` | — | `front-page.php` | Hero con propuesta de valor, accesos directos a Servicios/Flota/Sectores, cifras clave (flota, años de experiencia, certificaciones), testimonios destacados, CTA "Solicitar cotización", franja de confianza (logos de clientes), último contenido del blog. |

### 3.2 Nosotros

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Nosotros | `nosotros` | — | Landing | Resumen institucional + tarjetas a las 4 subpáginas. |
| Quiénes somos | `quienes-somos` | Nosotros | Estándar | Historia, presentación de la empresa, línea de tiempo. |
| Nuestra experiencia | `nuestra-experiencia` | Nosotros | Estándar | Años en el mercado, proyectos relevantes, cifras/hitos, sectores atendidos. |
| Misión y visión | `mision-y-vision` | Nosotros | Estándar | Misión, visión, valores corporativos. |
| Seguridad y compromiso | `seguridad-y-compromiso` | Nosotros | Estándar | Cultura de seguridad, compromiso ambiental/social, certificaciones (ISO, SCTR, etc.). |

### 3.3 Servicios

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Servicios | `servicios` | — | Landing | Grid de los 5 servicios con ícono, resumen y enlace. |
| Transporte de carga pesada | `transporte-de-carga-pesada` | Servicios | Servicio | Descripción, tipos de carga, capacidad, sectores atendidos, CTA cotización. |
| Transporte de carga general | `transporte-de-carga-general` | Servicios | Servicio | Ídem, orientado a carga general/paletizada. |
| Transporte corporativo | `transporte-corporativo` | Servicios | Servicio | Traslado de personal, unidades, rutas, convenios empresariales. |
| Transporte con vehículos menores | `transporte-con-vehiculos-menores` | Servicios | Servicio | Camionetas, furgones, última milla. |
| Servicios especiales | `servicios-especiales` | Servicios | Servicio | Carga sobredimensionada, urgente, custodia, otros servicios a medida. |

### 3.4 Flota

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Flota | `flota` | — | Landing | Resumen de la flota total + accesos a subpáginas. |
| Vehículos de carga pesada | `vehiculos-de-carga-pesada` | Flota | Vehículo/Flota | Listado/galería de unidades (tráileres, semirremolques, cisternas, plataformas), fichas técnicas. |
| Vehículos menores | `vehiculos-menores` | Flota | Vehículo/Flota | Listado de camionetas/furgones, fichas técnicas. |
| Características de la flota | `caracteristicas-de-la-flota` | Flota | Estándar | Antigüedad promedio, GPS, mantenimiento preventivo, estándares de calidad. |

### 3.5 Sectores

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Sectores | `sectores` | — | Landing | Grid de los 5 sectores atendidos. |
| Minería | `mineria` | Sectores | Sector | Soluciones de transporte para minería, casos, requisitos de seguridad del sector. |
| Construcción | `construccion` | Sectores | Sector | Ídem para construcción/obras civiles. |
| Industria | `industria` | Sectores | Sector | Ídem para industria/manufactura. |
| Comercio | `comercio` | Sectores | Sector | Ídem para retail/distribución. |
| Otros sectores | `otros-sectores` | Sectores | Sector | Sectores adicionales no listados explícitamente. |

### 3.6 Seguridad y Operaciones

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Seguridad y Operaciones | `seguridad-y-operaciones` | — | Landing | Resumen del sistema de gestión operativa/SSOMA. |
| Gestión de seguridad | `gestion-de-seguridad` | Seguridad y Operaciones | Estándar | Política de seguridad, SSOMA, protocolos, certificaciones. |
| Mantenimiento de flota | `mantenimiento-de-flota` | Seguridad y Operaciones | Estándar | Plan de mantenimiento preventivo/correctivo, taller propio, inspecciones. |
| Gestión de conductores | `gestion-de-conductores` | Seguridad y Operaciones | Estándar | Selección, capacitación, evaluación y control de conductores. |
| Control y monitoreo | `control-y-monitoreo` | Seguridad y Operaciones | Estándar | GPS/telemetría, central de monitoreo 24/7, indicadores. |

### 3.7 Clientes / Experiencia

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Clientes / Experiencia | `clientes` | — | Estándar + loop CPT | Logos de clientes, testimonios (CPT *Testimonio*), casos de éxito, indicadores de satisfacción. |

### 3.8 Blog / Noticias

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Blog / Noticias | `blog` | — | `home.php` (página de entradas) | Listado de entradas nativas de WordPress (noticias, novedades del sector, avisos). Configurar en *Ajustes > Lectura* como "página de entradas". |

### 3.9 Contacto

| Página | Slug | Padre | Plantilla | Contenido clave |
|---|---|---|---|---|
| Contacto | `contacto` | — | Landing | Resumen de canales de contacto + accesos a subpáginas. |
| Solicitar cotización | `solicitar-cotizacion` | Contacto | Formulario | Formulario específico de cotización (tipo de carga, origen/destino, volumen, fecha). |
| Formulario de contacto | `formulario-de-contacto` | Contacto | Formulario | Formulario general de contacto (nombre, empresa, mensaje). |
| WhatsApp | — (enlace externo) | Contacto | — | Enlace directo `https://wa.me/51XXXXXXXXX` con mensaje predefinido; también como botón flotante global. |
| Ubicación | `ubicacion` | Contacto | Mapa | Dirección, mapa embebido (Google Maps), horario de atención, referencias. |

## 4. Estructura de menús en WordPress

**Menú principal** (`Apariencia > Menús`, ubicación *Primary*): réplica exacta del árbol
de la sección 2, usando páginas como ítems y el enlace personalizado de WhatsApp.

**Menú de pie de página** (*Footer*): enlaces rápidos (Servicios, Flota, Sectores,
Contacto), enlaces legales (Política de privacidad, Términos y condiciones — crear como
páginas adicionales sin mostrarlas en el menú principal), y redes sociales.

## 5. Tipos de contenido y taxonomías recomendadas

| Elemento | Recomendación |
|---|---|
| Blog / Noticias | Post nativo de WordPress. Crear categorías alineadas a los sectores (Minería, Construcción, Industria, Comercio) para poder filtrar/relacionar contenido. |
| Vehículos de la flota | Custom Post Type `vehiculo` con taxonomía `categoria_flota` (carga pesada / menores), campos personalizados (ACF): capacidad, tipo de unidad, año, foto. Las páginas "Vehículos de carga pesada" y "Vehículos menores" se convierten en *archivos* filtrados por taxonomía en vez de contenido estático, facilitando agregar/quitar unidades sin tocar código. |
| Testimonios | Custom Post Type `testimonio` (cliente, cargo/empresa, logo, cita) para alimentar la página "Clientes / Experiencia" y bloques de testimonios en Inicio. |
| Servicios / Sectores | Mantener como páginas estándar (contenido fijo, bajo número de ítems); si a futuro crecen más allá de 5-6, migrar a CPT `servicio` / `sector` con plantilla de archivo. |
| WhatsApp | No requiere contenido en WordPress: enlace directo + botón flotante (plugin o snippet). |

## 6. Plantillas de página a desarrollar en el tema

- `front-page.php` — Inicio.
- `page-landing-seccion.php` — portadas de Nosotros, Servicios, Flota, Sectores, Seguridad y Operaciones, Contacto (grid hacia hijas).
- `page-servicio.php` — subpáginas de Servicios.
- `page-sector.php` — subpáginas de Sectores.
- `page-estandar.php` — contenido de texto/imagen genérico (Nosotros, Seguridad y Operaciones).
- `archive-vehiculo.php` / `taxonomy-categoria_flota.php` — listados de flota.
- `page-formulario.php` — Solicitar cotización, Formulario de contacto.
- `page-ubicacion.php` — mapa + datos de contacto.
- `home.php` — archivo de Blog/Noticias.

## 7. Plugins sugeridos

- **Advanced Custom Fields (ACF)** — campos personalizados para servicios, vehículos, sectores y testimonios.
- **WPForms** o **Contact Form 7 + Flamingo** — formularios de cotización y contacto, con notificación por email.
- **Click to Chat / WhatsApp Chat** — botón flotante y enlaces directos de WhatsApp.
- **Yoast SEO** o **Rank Math** — metadatos, sitemap.xml, breadcrumbs, schema.org (`LocalBusiness`/`Organization`).
- **WP Rocket** o **LiteSpeed Cache** (según hosting) — rendimiento.
- **Google Maps embed** (o bloque nativo de Google Maps vía iframe) — página Ubicación.

## 8. Consideraciones adicionales

- **Permalinks**: usar estructura `/%postname%/` con jerarquía de páginas (`Ajustes > Enlaces permanentes`).
- **Breadcrumbs**: activar en el plugin SEO para reforzar la navegación jerárquica (Inicio > Servicios > Transporte de carga pesada).
- **CTA transversal**: incluir botón "Solicitar cotización" en el header/footer y al final de cada página de Servicios/Sectores/Flota.
- **Botón flotante de WhatsApp**: visible en todo el sitio, no solo en Contacto.
- **Datos estructurados**: schema `LocalBusiness` con dirección, teléfono y horario (alimenta también la página Ubicación).
- **Páginas legales** (no listadas en el menú original pero recomendadas): Política de privacidad y Términos y condiciones, enlazadas desde el footer.
