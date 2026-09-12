# GCCTOUR PHP — reference-style redesign

Plain HTML + PHP 8 site for `gcctour.com`.

## Design reference

The supplied screenshot is used only as visual direction. The implementation borrows high-level traits such as:

- navy heading color
- mustard/gold accent
- light gray content bands
- white rounded information cards
- small circular arrow controls
- centered 3-step process section
- overlapping result/verification feature block
- partner/source orbit layout
- compact editorial typography

The project does **not** copy the reference site's logos, text, partner logos, imagery or proprietary icons.

## Requirements

- PHP 8+
- Apache/shared hosting or PHP development server
- no database
- no Composer
- no Node/npm

## Local run

```bash
php -S localhost:8000
```

Then open `http://localhost:8000`.

## Hosting

Upload the contents of this folder to `public_html/` for `gcctour.com`.

## Main files

- `index.php` — reference-inspired homepage
- `assets/style.css` — visual system
- `assets/app.js` — mobile navigation
- `includes/data.php` — countries + article content
- `includes/header.php`
- `includes/footer.php`
- `article.php` — dynamic article page
- `country.php` — dynamic country guide

## Editorial rule

All changing visa information must remain one of:

- `confirmed`
- `reported`
- `expected`

Never publish an unverified launch date, official fee, validity period or eligibility rule as a final fact.
