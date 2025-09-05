# Repository Info

- Name: portfolio-main
- Purpose: Personal portfolio site for Caren Jeruto
- Tech: HTML, CSS, JavaScript, minimal PHP for contact form
- Entry pages: index.html, about.html, skills.html, cv.html, contact.html
- Assets in root: me.png, carr.png, carry.png, car.png, image.png, rey.png
- Scripts: script.js (typing effect, modal helpers)
- Styles: style.css (layout, hero background, responsive sidebar)

## Known issues previously observed
- Conflicting .main-content background rules causing overlay glitches
- Navigation used modal handlers without modals
- Favicon links referenced missing files in assets/
- Potential missing service icons under images/

## Decisions made
- Unified hero background and overlay in CSS
- Switched nav to anchor links with smooth scrolling
- Introduced CSS variables for accent color (gold)
- Added mobile-responsive sidebar behavior

## Next ideas
- Add scrollspy to highlight active section based on viewport
- Replace external icons with local SVGs for consistency
- Bundle assets under /assets and update paths