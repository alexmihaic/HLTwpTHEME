# HAZ LO TUYO Theme (Child Theme de Twenty Twenty-Five)

Tema hijo WordPress orientado a sitios construidos con Gutenberg/FSE.

## Estructura

- `style.css` → cabecera del tema hijo.
- `functions.php` → carga estilos del padre y del hijo.
- `theme.json` → tokens de diseño (colores, tipografías, tamaños y layout).
- `assets/hlt.css` → capa visual editorial para bloques y secciones.

## Instalación como ZIP (Apariencia > Temas > Añadir nuevo)

1. Asegúrate de que la carpeta del tema se llama exactamente `haz-lo-tuyo-theme`.
2. Dentro de esa carpeta deben estar directamente estos archivos y carpeta:
   - `style.css`
   - `functions.php`
   - `theme.json`
   - `README.md`
   - `assets/hlt.css`
3. Comprime la carpeta `haz-lo-tuyo-theme` en un `.zip` (no comprimas solo los archivos sueltos).
4. En WordPress ve a `Apariencia > Temas > Añadir nuevo > Subir tema`.
5. Sube el ZIP y activa **HAZ LO TUYO Theme**.
6. Verifica que el tema padre **Twenty Twenty-Five** está instalado; al ser un tema hijo, lo necesita.

## Instalación manual (alternativa)

1. Copia esta carpeta como `haz-lo-tuyo-theme` dentro de `wp-content/themes/`.
2. Ve a `Apariencia > Temas` y activa **HAZ LO TUYO Theme**.

## Uso recomendado en páginas FSE

Añade clases personalizadas a bloques `Group` o contenedores principales para aplicar estilos:

- `hlt-hero`
- `hlt-problem`
- `hlt-services`
- `hlt-featured-projects`
- `hlt-method`
- `hlt-ai`
- `hlt-trust`
- `hlt-faq`
- `hlt-final-cta`
- `hlt-services-hero`
- `hlt-core-services`
- `hlt-secondary-services`
- `hlt-projects-hero`
- `hlt-method-hero`
- `hlt-about-hero`
- `hlt-contact-hero`

## Notas

- Mobile-first.
- Sin dependencias externas.
- Sin frameworks.
- Sin imágenes incluidas.

## Versión 1.0.1

Resumen breve de mejoras visuales de la segunda iteración:

- Composición más editorial en hero y secciones principales.
- Layout más amplio en desktop para evitar sensación de columna estrecha.
- Tarjetas de servicios/proyectos con mayor jerarquía visual y acabado premium.
- Footer con mejor presencia editorial y ritmo visual.
- Ajustes responsive refinados para móvil, tablet y desktop.

