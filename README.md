# Upload-GitHub

Web app statis untuk upload file/folder/ZIP langsung ke repository GitHub via REST API.

## Fitur
- Upload file, folder (`webkitdirectory`), dan ZIP.
- Commit langsung ke branch GitHub yang dipilih.
- UI modern, clean, dan profesional berbasis SVG icon.
- Siap deploy ke Vercel (konfigurasi di `vercel.json`).

## Deploy ke Vercel
1. Push project ini ke GitHub.
2. Import repository di Vercel.
3. Framework preset: **Other** (static site).
4. Build command: kosongkan.
5. Output directory: kosongkan (root).

## Catatan keamanan
- Token PAT hanya dipakai di browser saat request API dilakukan.
- Jangan membagikan token dan gunakan scope minimum yang diperlukan.
