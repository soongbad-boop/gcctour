# GitHub Copilot prompt — PHP version

Build and improve `gcctour.com` using the existing plain PHP 8 project.

Rules:
- Do not convert the project to Laravel, WordPress, Next.js or another framework.
- Use reusable PHP includes.
- Keep it shared-hosting friendly.
- No database unless explicitly requested later.
- No Composer dependency unless genuinely required.
- Use semantic HTML and existing CSS.
- Keep mobile navigation accessible.
- Do not create a fake visa application/payment form.
- Do not copy third-party article bodies or branded assets.
- Treat the supplied design image as visual inspiration only.
- Keep all changing visa claims marked as `confirmed`, `reported`, or `expected`.
- Add source links and `last verified` dates to changing visa/news content.

When I provide a reference image:
1. inspect its visual hierarchy,
2. identify header/hero/card/spacing/typography traits,
3. reproduce the overall style with original GCCTOUR branding,
4. do not copy logos/text/images from the reference.

Work file-by-file. Reuse existing includes/components and avoid unnecessary rewrites.
