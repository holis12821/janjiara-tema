<?php /* JANJIARA — landing page & Form Order. File ini HTML biasa; PHP hanya dipakai sebagai halaman utama (index.php) di cPanel. */ ?>
<!doctype html>
<html lang="id" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JANJIARA — Undangan Digital Pernikahan, Aqiqah, Khitan &amp; Ulang Tahun</title>
  <script>window.JJ_TITLE = document.title;</script>
  <meta name="description" content="JANJIARA membuat undangan digital yang elegan dan personal untuk pernikahan, ulang tahun anak, khitanan, aqiqah &amp; tasmiyah, hingga syukuran. Lengkap dengan RSVP, peta, galeri, dan amplop digital.">
  <meta name="theme-color" content="#59664A">
  <!-- Verifikasi kepemilikan domain di Google Search Console — jangan dihapus. -->
  <meta name="google-site-verification" content="7JlvSq88SyWrVjRl1fPwi1HLHHbU_uicEqHRgtWG29s" />
  <meta property="og:title" content="JANJIARA — Setiap Janji, Punya Cerita.">
  <meta property="og:description" content="Undangan digital elegan untuk setiap momen berharga keluarga Indonesia.">
  <meta property="og:type" content="website">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0yMDMuODQgLTMwMy44NCA0MDcuNjggNDA3LjY4IiB3aWR0aD0iNDA4IiBoZWlnaHQ9IjQwOCI+PHRpdGxlPmphbmppYXJhLWZhdmljb248L3RpdGxlPjxwYXRoIGQ9Ik0tMTUwLjAwLDk2LjAwIEwtMTUwLjAwLC0xNDYuMDAgQTE1MC4wMCwxNTAuMDAgMCAwIDEgMTUwLjAwLC0xNDYuMDAgTDE1MC4wMCw5Ni4wMCBaIiBmaWxsPSIjNTk2NjRBIi8+PHBhdGggZD0iTTEwOC42NjAwMDM2NjIxMDkzOCAxMC44NTU5OTk5NDY1OTQyMzhRMTA5LjcwODAwMDE4MzEwNTQ3IDEwLjg1NTk5OTk0NjU5NDIzOCAxMDkuNzA4MDAwMTgzMTA1NDcgMTIuNDI3OTk5OTczMjk3MTJRMTA5LjcwODAwMDE4MzEwNTQ3IDE0LjAgMTA4LjY2MDAwMzY2MjEwOTM4IDE0LjBRMTAwLjgwMDAwMzA1MTc1NzgxIDE0LjAgOTIuNTQ3MDAwODg1MDA5NzcgMTMuNDc1OTk5ODMyMTUzMzJRODQuMjkzOTk4NzE4MjYxNzIgMTIuOTUxOTk5NjY0MzA2NjQgNzYuNjk1OTk5MTQ1NTA3ODEgMTIuOTUxOTk5NjY0MzA2NjRRNjguMDUwMDAzMDUxNzU3ODEgMTIuOTUxOTk5NjY0MzA2NjQgNjEuNjMxMDAyNDI2MTQ3NDYgMTMuNDc1OTk5ODMyMTUzMzJRNTUuMjEyMDAxODAwNTM3MTEgMTQuMCA0Ny4zNTIwMDExOTAxODU1NSAxNC4wUTQ2LjMwNDAwMDg1NDQ5MjE5IDE0LjAgNDYuMzA0MDAwODU0NDkyMTkgMTIuNDI3OTk5OTczMjk3MTJRNDYuMzA0MDAwODU0NDkyMTkgMTAuODU1OTk5OTQ2NTk0MjM4IDQ3LjM1MjAwMTE5MDE4NTU1IDEwLjg1NTk5OTk0NjU5NDIzOFE1OS4xNDE5OTgyOTEwMTU2MjUgMTAuODU1OTk5OTQ2NTk0MjM4IDYxLjUgNi42NjM5OTk5MTUxMjI5ODZRNjMuODU4MDAxNzA4OTg0Mzc1IDIuNDcxOTk5ODgzNjUxNzMzNCA1Ny41Njk5OTk2OTQ4MjQyMiAtOS44NDIwMDAwMDc2MjkzOTVMMzcuNzI4Mjc5MTEzNzY5NTMgLTUwLjE4OTk5ODYyNjcwODk4NEgtMjUuNzYwMDk3NTAzNjYyMTFMLTM4LjMyMTk5ODU5NjE5MTQwNiAtMjEuODkzOTk5MDk5NzMxNDQ1US00NS4xMzM5OTg4NzA4NDk2MSAtNS45MTIwMDAxNzkyOTA3NzE1IC0zOC43MTUwMDAxNTI1ODc4OSAyLjQ3MTk5OTg4MzY1MTczMzRRLTMyLjI5NjAwMTQzNDMyNjE3IDEwLjg1NTk5OTk0NjU5NDIzOCAtMTYuODM3OTk5MzQzODcyMDcgMTAuODU1OTk5OTQ2NTk0MjM4US0xNS41Mjc5OTk4Nzc5Mjk2ODggMTAuODU1OTk5OTQ2NTk0MjM4IC0xNS41Mjc5OTk4Nzc5Mjk2ODggMTIuNDI3OTk5OTczMjk3MTJRLTE1LjUyNzk5OTg3NzkyOTY4OCAxNC4wIC0xNi44Mzc5OTkzNDM4NzIwNyAxNC4wUS0yNC42OTc5OTk5NTQyMjM2MzMgMTQuMCAtMzEuMjQ3OTk5MTkxMjg0MTggMTMuNDc1OTk5ODMyMTUzMzJRLTM2LjU1MDc5MjY5NDA5MTggMTMuMDUxNzc1OTMyMzEyMDEyIC00NC4wODU5OTg1MzUxNTYyNSAxMi45NzA5OTg3NjQwMzgwODZWMTcuMTQzOTk5MDk5NzMxNDQ1US00NC4wODU5OTg1MzUxNTYyNSA0NS4xNzgwMDE0MDM4MDg1OTQgLTU3LjcwOTk5OTA4NDQ3MjY1NiA2MS40MjIwMDA4ODUwMDk3NjZRLTcxLjMzMzk5OTYzMzc4OTA2IDc3LjY2NjAwMDM2NjIxMDk0IC05Ni40ODYwMDAwNjEwMzUxNiA3Ny42NjYwMDAzNjYyMTA5NFEtMTA1LjkxNzk5OTI2NzU3ODEyIDc3LjY2NjAwMDM2NjIxMDk0IC0xMTEuODEyOTk5NzI1MzQxOCA3My44NjcwMDA1Nzk4MzM5OFEtMTE3LjcwODAwMDE4MzEwNTQ3IDcwLjA2ODAwMDc5MzQ1NzAzIC0xMTcuNzA4MDAwMTgzMTA1NDcgNjMuNTE4MDAxNTU2Mzk2NDg0US0xMTcuNzA4MDAwMTgzMTA1NDcgNTkuMDYzOTk5MTc2MDI1MzkgLTExNC44MjYwMDAyMTM2MjMwNSA1NS4zOTU5OTk5MDg0NDcyNjZRLTExMS45NDQwMDAyNDQxNDA2MiA1MS43MjgwMDA2NDA4NjkxNCAtMTA1LjY1NTk5ODIyOTk4MDQ3IDUxLjcyODAwMDY0MDg2OTE0US05OS44OTE5OTgyOTEwMTU2MiA1MS43MjgwMDA2NDA4NjkxNCAtOTYuODc4OTk3ODAyNzM0MzggNTQuNzQxMDAxMTI5MTUwMzlRLTkzLjg2NTk5NzMxNDQ1MzEyIDU3Ljc1NDAwMTYxNzQzMTY0IC05Mi4wMzE5OTc2ODA2NjQwNiA2MS44MTUwMDA1MzQwNTc2MlEtOTAuMTk3OTk4MDQ2ODc1IDY1Ljg3NTk5OTQ1MDY4MzYgLTg4LjM2Mzk5ODQxMzA4NTk0IDY5LjAyMDAwMDQ1Nzc2MzY3US04Ni41Mjk5OTg3NzkyOTY4OCA3Mi4xNjQwMDE0NjQ4NDM3NSAtODMuMTI0MDAwNTQ5MzE2NCA3Mi4xNjQwMDE0NjQ4NDM3NVEtNzYuMzExOTk2NDU5OTYwOTQgNzIuMTY0MDAxNDY0ODQzNzUgLTcyLjkwNTk5ODIyOTk4MDQ3IDYyLjczMjAwMDM1MDk1MjE1US02OS41IDUzLjI5OTk5OTIzNzA2MDU1IC02OS41IDMxLjAzMDAwMDY4NjY0NTUwOFYxMy44NDI3OTYzMjU2ODM1OTRRLTczLjQxMDM0Njk4NDg2MzI4IDE0LjAgLTc4LjE0NjAwMzcyMzE0NDUzIDE0LjBRLTc5LjE5NDAwMDI0NDE0MDYyIDE0LjAgLTc5LjE5NDAwMDI0NDE0MDYyIDEyLjQyNzk5OTk3MzI5NzEyUS03OS4xOTQwMDAyNDQxNDA2MiAxMC44NTU5OTk5NDY1OTQyMzggLTc4LjE0NjAwMzcyMzE0NDUzIDEwLjg1NTk5OTk0NjU5NDIzOFEtNzMuMzc2MzQyNzczNDM3NSAxMC44NTU5OTk5NDY1OTQyMzggLTY5LjUgOS41NDU3OTczNDgwMjI0NjFWLTEyOC41Mjc5OTk4Nzc5Mjk3US02OS41IC0xMzYuMTI2MDA3MDgwMDc4MTIgLTcxLjIwMjk5OTExNDk5MDIzIC0xMzkuOTI1MDAzMDUxNzU3OFEtNzIuOTA1OTk4MjI5OTgwNDcgLTE0My43MjM5OTkwMjM0Mzc1IC03Ny44ODM5OTg4NzA4NDk2MSAtMTQ1LjE2NTAwMDkxNTUyNzM0US04Mi44NjE5OTk1MTE3MTg3NSAtMTQ2LjYwNjAwMjgwNzYxNzIgLTkyLjgxODAwMDc5MzQ1NzAzIC0xNDYuNjA2MDAyODA3NjE3MlEtOTMuMzQyMDAyODY4NjUyMzQgLTE0Ni42MDYwMDI4MDc2MTcyIC05My4zNDIwMDI4Njg2NTIzNCAtMTQ4LjE3ODAwMTQwMzgwODZRLTkzLjM0MjAwMjg2ODY1MjM0IC0xNDkuNzUgLTkyLjgxODAwMDc5MzQ1NzAzIC0xNDkuNzVRLTg0Ljk1ODAwMDE4MzEwNTQ3IC0xNDkuNzUgLTc1LjkxODk5ODcxODI2MTcyIC0xNDkuMzU3MDAyMjU4MzAwNzhRLTY2Ljg3OTk5NzI1MzQxNzk3IC0xNDguOTY0MDA0NTE2NjAxNTYgLTU3LjE4NjAwMDgyMzk3NDYxIC0xNDguOTY0MDA0NTE2NjAxNTZRLTQ4LjI3Nzk5OTg3NzkyOTY5IC0xNDguOTY0MDA0NTE2NjAxNTYgLTQwLjgxMTAwMDgyMzk3NDYxIC0xNDkuMzU3MDAyMjU4MzAwNzhRLTMzLjM0NDAwMTc3MDAxOTUzIC0xNDkuNzUgLTI3LjMxODAwMDc5MzQ1NzAzIC0xNDkuNzVRLTI2Ljc5NDAwMDYyNTYxMDM1IC0xNDkuNzUgLTI2Ljc5NDAwMDYyNTYxMDM1IC0xNDguMTc4MDAxNDAzODA4NlEtMjYuNzk0MDAwNjI1NjEwMzUgLTE0Ni42MDYwMDI4MDc2MTcyIC0yNy4zMTgwMDA3OTM0NTcwMyAtMTQ2LjYwNjAwMjgwNzYxNzJRLTM0LjY1Mzk5OTMyODYxMzI4IC0xNDYuNjA2MDAyODA3NjE3MiAtMzguMTkwOTk5OTg0NzQxMjEgLTE0NS4wMzQwMDQyMTE0MjU3OFEtNDEuNzI4MDAwNjQwODY5MTQgLTE0My40NjIwMDU2MTUyMzQzOCAtNDIuOTA2OTk5NTg4MDEyNjk1IC0xMzkuNTMyMDA1MzEwMDU4NlEtNDQuMDg1OTk4NTM1MTU2MjUgLTEzNS42MDIwMDUwMDQ4ODI4IC00NC4wODU5OTg1MzUxNTYyNSAtMTI4LjAwMzk5NzgwMjczNDM4Vi0yNi4wMjUwNzc4MTk4MjQyMkwxMS40NTgwMDAxODMxMDU0NjkgLTE1MS4zMjIwMDYyMjU1ODU5NFExMS45ODIwMDAzNTA5NTIxNDggLTE1Mi4xMDgwMDE3MDg5ODQzOCAxMy44MTU5OTk5ODQ3NDEyMTEgLTE1Mi4xMDgwMDE3MDg5ODQzOFExNS42NDk5OTk2MTg1MzAyNzMgLTE1Mi4xMDgwMDE3MDg5ODQzOCAxNS45MTE5OTk3MDI0NTM2MTMgLTE1MS4zMjIwMDYyMjU1ODU5NEw4MC4xMDE5OTczNzU0ODgyOCAtMjEuODkzOTk5MDk5NzMxNDQ1UTg2LjEyNzk5ODM1MjA1MDc4IC05LjMxNzk5OTgzOTc4MjcxNSA5MC44NDM5OTc5NTUzMjIyNyAtMi4xMTI5OTk5MTYwNzY2NlE5NS41NTk5OTc1NTg1OTM3NSA1LjA5MjAwMDAwNzYyOTM5NDUgOTkuNzUxOTk4OTAxMzY3MTkgNy45NzM5OTk5NzcxMTE4MTZRMTAzLjk0NDAwMDI0NDE0MDYyIDEwLjg1NTk5OTk0NjU5NDIzOCAxMDguNjYwMDAzNjYyMTA5MzggMTAuODU1OTk5OTQ2NTk0MjM4Wk0zNC41MDcyMTc0MDcyMjY1NiAtNTYuNzQwMDAxNjc4NDY2OCA0LjM2MTgzNjQzMzQxMDY0NDUgLTExOC4wNDA0MjA1MzIyMjY1NiAtMjIuODUyMjQ5MTQ1NTA3ODEyIC01Ni43NDAwMDE2Nzg0NjY4WiIgZmlsbD0iI0Y4RjRFQyIvPjwvc3ZnPg==">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&amp;family=Jost:wght@400;500&amp;display=swap" rel="stylesheet">
  <style>
/* =========================================================================
   JANJIARA — Landing Page
   Brand: Deep Olive #59664A · Warm Ivory #F8F4EC · Muted Gold #C6A66B
          Dark Charcoal #292A26 · Dusty Rose #D8B8B2
   Font : Cormorant Garamond (judul) · Jost (teks & UI) — keduanya SIL OFL
   ========================================================================= */

/* ---------- 1. Design tokens --------------------------------------------- */
:root {
  /* Tonal scale (lihat brand-guidelines/web-color-palette.md) */
  --olive-50: #F5F8F3;  --olive-100: #EBEEE7; --olive-200: #D9DFD3; --olive-300: #C0C9B7;
  --olive-500: #869376; --olive-600: #6B785D; --olive-700: #59664A; --olive-800: #424A38;
  --olive-900: #2F3429; --olive-950: #1D1F1B;
  --neutral-50: #F8F4EC; --neutral-100: #F0ECE4; --neutral-200: #E0DCD4; --neutral-300: #C9C5BD;
  --neutral-600: #75736D; --neutral-700: #5E5C57; --neutral-800: #494641; --neutral-950: #292A26;
  --gold-50: #FBF6ED; --gold-100: #F3ECE0; --gold-200: #E7DBC4; --gold-300: #D7C3A0;
  --gold-400: #C6A66B; --gold-700: #705829; --gold-800: #554321;
  --rose-50: #FCF5F4; --rose-100: #F4EAE9; --rose-200: #E9D8D5; --rose-300: #D8B8B2; --rose-800: #57403C;
  --success-600: #4F8060;
  --white-warm: #FFFDF9;

  /* Semantic tokens */
  --bg-page: var(--neutral-50);
  --bg-surface: var(--white-warm);
  --bg-subtle: var(--neutral-100);
  --bg-brand: var(--olive-700);
  --bg-brand-deep: var(--olive-900);
  --bg-romantic: var(--rose-100);
  --border: var(--neutral-200);
  --border-input: var(--neutral-600);
  --text-primary: var(--neutral-950);
  --text-secondary: var(--neutral-800);
  --text-muted: var(--neutral-700);
  --text-brand: var(--olive-700);
  --text-eyebrow: var(--gold-700);
  --text-on-brand: var(--neutral-50);
  --focus: var(--olive-600);

  /* Type */
  --font-serif: "Cormorant Garamond", "Cormorant", Georgia, "Times New Roman", serif;
  --font-sans: "Jost", "Segoe UI", system-ui, -apple-system, sans-serif;

  /* Layout */
  --container: 1180px;
  --radius-sm: 8px;
  --radius: 16px;
  --radius-lg: 28px;
  --shadow-sm: 0 2px 8px rgba(41, 42, 38, .06);
  --shadow: 0 12px 32px rgba(41, 42, 38, .08);
  --shadow-lg: 0 24px 60px rgba(41, 42, 38, .14);
  --ease: cubic-bezier(.22, .61, .36, 1);
}

/* ---------- 2. Reset & base ---------------------------------------------- */
*, *::before, *::after { box-sizing: border-box; }
[hidden] { display: none !important; }   /* kalahkan display dari .btn dll. */
html { scroll-behavior: smooth; scroll-padding-top: 88px; -webkit-text-size-adjust: 100%; }
body {
  margin: 0;
  font-family: var(--font-sans);
  font-size: 1rem;
  line-height: 1.65;
  color: var(--text-secondary);
  background: var(--bg-page);
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}
img, svg { display: block; max-width: 100%; }
a { color: var(--text-brand); text-decoration-thickness: 1px; text-underline-offset: 3px; }
a:hover { color: var(--olive-800); }
h1, h2, h3, h4 {
  font-family: var(--font-serif);
  font-weight: 500;
  color: var(--text-primary);
  line-height: 1.12;
  margin: 0 0 .5em;
  letter-spacing: -.005em;
}
p { margin: 0 0 1em; }
ul { margin: 0; padding: 0; list-style: none; }
button { font: inherit; cursor: pointer; }
:focus-visible { outline: 2px solid var(--focus); outline-offset: 3px; border-radius: 4px; }
::selection { background: var(--olive-200); color: var(--text-primary); }

.container { width: min(100% - 32px, var(--container)); margin-inline: auto; }
.visually-hidden {
  position: absolute !important; width: 1px; height: 1px; padding: 0; margin: -1px;
  overflow: hidden; clip: rect(0 0 0 0); white-space: nowrap; border: 0;
}
.skip-link {
  position: absolute; left: 16px; top: -60px; z-index: 100;
  background: var(--bg-brand); color: var(--text-on-brand); padding: 10px 16px; border-radius: var(--radius-sm);
}
.skip-link:focus { top: 12px; color: var(--text-on-brand); }

/* ---------- 3. Typography helpers ---------------------------------------- */
.eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-family: var(--font-sans); font-size: .78rem; font-weight: 500;
  letter-spacing: .28em; text-transform: uppercase; color: var(--text-eyebrow);
  margin-bottom: 18px;
}
.eyebrow::before { content: ""; width: 28px; height: 1px; background: var(--gold-400); }
.eyebrow--center::after { content: ""; width: 28px; height: 1px; background: var(--gold-400); }
.section-head { max-width: 640px; margin: 0 auto 56px; text-align: center; }
.section-head h2 { font-size: clamp(2.1rem, 4.2vw, 3.1rem); }
.section-head p { color: var(--text-muted); font-size: 1.06rem; }
.accent { font-style: italic; color: var(--text-brand); }

/* ---------- 4. Buttons ---------------------------------------------------- */
.btn {
  display: inline-flex; align-items: center; justify-content: center; gap: 10px;
  min-height: 48px; padding: 12px 26px;
  border-radius: 999px; border: 1.5px solid transparent;
  font-family: var(--font-sans); font-weight: 500; font-size: .98rem; letter-spacing: .01em;
  text-decoration: none; white-space: nowrap;
  transition: background-color .25s var(--ease), color .25s var(--ease), border-color .25s var(--ease),
              transform .25s var(--ease), box-shadow .25s var(--ease);
}
.btn svg { width: 18px; height: 18px; flex: none; }
.btn--primary { background: var(--olive-700); color: var(--neutral-50); box-shadow: 0 8px 20px rgba(89, 102, 74, .22); }
.btn--primary:hover { background: var(--olive-800); color: var(--neutral-50); transform: translateY(-2px); }
.btn--primary:active { background: var(--olive-900); transform: translateY(0); }
.btn--outline { border-color: var(--olive-700); color: var(--olive-700); background: transparent; }
.btn--outline:hover { background: var(--olive-50); color: var(--olive-800); }
.btn--light { background: var(--neutral-50); color: var(--olive-700); }
.btn--light:hover { background: var(--white-warm); color: var(--olive-800); transform: translateY(-2px); }
.btn--ghost-light { border-color: rgba(248, 244, 236, .55); color: var(--neutral-50); }
.btn--ghost-light:hover { background: rgba(248, 244, 236, .1); color: var(--neutral-50); }
.btn--sm { min-height: 42px; padding: 9px 20px; font-size: .92rem; }
.btn:disabled, .btn[disabled] { opacity: .42; cursor: not-allowed; box-shadow: none; transform: none; filter: saturate(.6); }
.btn:disabled:hover, .btn[disabled]:hover { transform: none; }
.btn--block { width: 100%; }

/* ---------- 5. Header / navbar ------------------------------------------- */
.site-header {
  position: sticky; top: 0; z-index: 50;
  background: rgba(248, 244, 236, .86);
  backdrop-filter: saturate(140%) blur(12px);
  -webkit-backdrop-filter: saturate(140%) blur(12px);
  border-bottom: 1px solid transparent;
  transition: border-color .3s var(--ease), box-shadow .3s var(--ease);
}
.site-header.is-scrolled { border-bottom-color: var(--border); box-shadow: var(--shadow-sm); }
.nav { display: flex; align-items: center; justify-content: space-between; height: 76px; gap: 24px; }
.brand { color: var(--olive-700); display: inline-flex; }
.brand svg { height: 40px; width: auto; aspect-ratio: 823.83 / 241.69; }
.nav__menu { display: flex; align-items: center; gap: 30px; }
.nav__menu a {
  position: relative; color: var(--text-secondary); text-decoration: none; font-size: .96rem; padding: 6px 0;
}
.nav__menu a::after {
  content: ""; position: absolute; left: 0; right: 0; bottom: 0; height: 1.5px;
  background: var(--olive-700); transform: scaleX(0); transform-origin: left; transition: transform .3s var(--ease);
}
.nav__menu a:hover, .nav__menu a.is-active { color: var(--olive-700); }
.nav__menu a:hover::after, .nav__menu a.is-active::after { transform: scaleX(1); }
.nav__toggle {
  display: none; width: 46px; height: 46px; border: 1px solid var(--border); border-radius: 12px;
  background: var(--bg-surface); align-items: center; justify-content: center; color: var(--text-primary);
}
.nav__toggle span, .nav__toggle span::before, .nav__toggle span::after {
  display: block; width: 20px; height: 1.5px; background: currentColor; position: relative; transition: transform .3s var(--ease);
}
.nav__toggle span::before, .nav__toggle span::after { content: ""; position: absolute; left: 0; }
.nav__toggle span::before { top: -6px; }
.nav__toggle span::after { top: 6px; }
.nav__toggle[aria-expanded="true"] span { background: transparent; }
.nav__toggle[aria-expanded="true"] span::before { transform: translateY(6px) rotate(45deg); }
.nav__toggle[aria-expanded="true"] span::after { transform: translateY(-6px) rotate(-45deg); }

/* ---------- 6. Hero ------------------------------------------------------- */
.hero { position: relative; padding: 72px 0 96px; overflow: hidden; }
.hero__visual::before { /* arch backdrop echoing the monogram gate */
  content: ""; position: absolute; left: 50%; top: -36px; transform: translateX(-50%);
  width: 420px; height: calc(100% + 36px); background: linear-gradient(180deg, var(--gold-50), rgba(248, 244, 236, 0));
  border: 1px solid var(--gold-300); border-bottom: 0; border-radius: 210px 210px 0 0; pointer-events: none;
}
.hero__visual .phone { z-index: 1; }
.hero__grid { display: grid; grid-template-columns: 1.08fr .92fr; gap: 56px; align-items: center; }
.hero h1 { font-size: clamp(2.8rem, 6.4vw, 5.1rem); margin-bottom: 22px; }
.hero h1 .accent { display: block; }
.hero__lead { font-size: 1.14rem; max-width: 540px; color: var(--text-secondary); margin-bottom: 30px; }
.hero__actions { display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 38px; }
.hero__events { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 34px; }
.chip {
  display: inline-flex; align-items: center; gap: 6px; padding: 6px 14px; border-radius: 999px;
  font-size: .85rem; background: var(--bg-surface); border: 1px solid var(--border); color: var(--text-secondary);
}
.chip::before { content: ""; width: 5px; height: 5px; background: var(--gold-400); transform: rotate(45deg); }
.hero__trust { display: grid; grid-template-columns: repeat(3, auto); gap: 28px; justify-content: start; }
.trust-item strong { display: block; font-family: var(--font-serif); font-size: 1.55rem; font-weight: 600; color: var(--text-brand); line-height: 1.1; }
.trust-item span { font-size: .86rem; color: var(--text-muted); }

/* Phone mockup */
.hero__visual { position: relative; display: flex; justify-content: center; }
.phone {
  position: relative; width: 300px; aspect-ratio: 9 / 19; padding: 12px;
  background: var(--neutral-950); border-radius: 46px; box-shadow: var(--shadow-lg);
}
.phone::before { /* notch */
  content: ""; position: absolute; top: 20px; left: 50%; transform: translateX(-50%);
  width: 84px; height: 22px; border-radius: 12px; background: var(--neutral-950); z-index: 2;
}
.phone__screen {
  position: relative; height: 100%; border-radius: 36px; overflow: hidden;
  background: radial-gradient(120% 70% at 50% 0%, var(--white-warm) 0%, var(--neutral-50) 60%, var(--gold-50) 100%);
  display: flex; flex-direction: column; align-items: center; text-align: center; padding: 64px 22px 26px;
}
.invite__arch {
  width: 150px; height: 190px; border: 1.2px solid var(--gold-400); border-bottom: 0;
  border-radius: 75px 75px 0 0; display: flex; flex-direction: column; justify-content: flex-end; align-items: center;
  padding-bottom: 14px; margin-bottom: 18px; position: relative;
}
.invite__arch::after { content: ""; position: absolute; inset: 8px 8px 0; border: 1px solid var(--olive-200); border-bottom: 0; border-radius: 67px 67px 0 0; }
.invite__label { font-size: .58rem; letter-spacing: .32em; text-transform: uppercase; color: var(--text-muted); margin-bottom: 6px; }
.invite__names { font-family: var(--font-serif); font-size: 2rem; line-height: 1; color: var(--olive-800); font-style: italic; }
.invite__amp { font-family: var(--font-serif); font-size: 1.2rem; color: var(--gold-700); font-style: italic; display: block; margin: 2px 0; }
.invite__date { font-family: var(--font-serif); font-size: 1.05rem; color: var(--text-primary); margin: 6px 0 2px; }
.invite__place { font-size: .7rem; color: var(--text-muted); margin-bottom: 14px; }
.countdown { display: flex; gap: 6px; margin-bottom: 16px; }
.countdown div { width: 46px; padding: 6px 0; background: var(--bg-surface); border: 1px solid var(--border); border-radius: 10px; }
.countdown b { display: block; font-family: var(--font-serif); font-size: 1.15rem; font-weight: 600; color: var(--olive-700); line-height: 1.1; }
.countdown small { font-size: .55rem; color: var(--text-muted); letter-spacing: .08em; }
.invite__btn { font-size: .72rem; padding: 8px 18px; border-radius: 999px; background: var(--olive-700); color: var(--neutral-50); }
.float-card {
  position: absolute; display: flex; align-items: center; gap: 10px;
  background: var(--bg-surface); border: 1px solid var(--border); border-radius: 14px;
  padding: 10px 14px; box-shadow: var(--shadow); font-size: .82rem; color: var(--text-secondary);
  animation: float 6s ease-in-out infinite;
}
.float-card b { color: var(--text-primary); font-weight: 500; display: block; font-size: .88rem; }
.float-card .ico { width: 34px; height: 34px; border-radius: 10px; display: grid; place-items: center; flex: none; }
.float-card .ico svg { width: 18px; height: 18px; }
.float-card { z-index: 2; }
.float-card--rsvp { left: -24px; top: 79%; }
.float-card--rsvp .ico { background: var(--olive-100); color: var(--olive-700); }
.float-card--gift { right: -28px; top: 8%; animation-delay: -3s; }
.float-card--gift .ico { background: var(--rose-100); color: var(--rose-800); }
@keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

/* ---------- 7. Sections (generic) ---------------------------------------- */
.section { padding: 104px 0; }
.section--surface { background: var(--bg-surface); }
.section--subtle { background: var(--bg-subtle); }
.section--romantic { background: var(--bg-romantic); }

/* ---------- 8. Event categories ------------------------------------------ */
.events { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }
.event-card {
  position: relative; display: flex; flex-direction: column;
  background: var(--bg-page); border: 1px solid var(--border); border-radius: var(--radius-lg);
  padding: 30px 26px 26px; overflow: hidden;
  transition: transform .35s var(--ease), box-shadow .35s var(--ease), border-color .35s var(--ease);
}
.event-card:hover { transform: translateY(-6px); box-shadow: var(--shadow); border-color: var(--gold-300); }
.event-card__icon {
  width: 64px; height: 76px; margin-bottom: 22px; display: grid; place-items: center;
  border-radius: 32px 32px 8px 8px; /* arch */
}
.event-card__icon svg { width: 30px; height: 30px; }
.event-card[data-tone="olive"] .event-card__icon { background: var(--olive-100); color: var(--olive-700); }
.event-card[data-tone="rose"]  .event-card__icon { background: var(--rose-100);  color: var(--rose-800); }
.event-card[data-tone="gold"]  .event-card__icon { background: var(--gold-100);  color: var(--gold-700); }
.event-card[data-tone="sage"]  .event-card__icon { background: #E5F0E8;          color: #3E674C; }
.event-card h3 { font-size: 1.7rem; margin-bottom: 8px; }
.event-card p { font-size: .95rem; color: var(--text-muted); }
.event-card ul { margin: 6px 0 22px; display: grid; gap: 8px; }
.event-card li { display: flex; gap: 10px; font-size: .9rem; color: var(--text-secondary); }
.event-card li::before { content: ""; flex: none; width: 6px; height: 6px; margin-top: .62em; background: var(--gold-400); transform: rotate(45deg); }
.event-card .link-arrow { margin-top: auto; }
.link-arrow {
  display: inline-flex; align-items: center; gap: 8px; font-weight: 500; font-size: .94rem;
  color: var(--olive-700); text-decoration: none;
}
.link-arrow svg { width: 16px; height: 16px; transition: transform .25s var(--ease); }
.link-arrow:hover svg { transform: translateX(4px); }

.other-events { margin-top: 64px; text-align: center; }
.other-events h3 { font-size: 1.8rem; margin-bottom: 6px; }
.other-events > p { color: var(--text-muted); margin-bottom: 28px; }
.other-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; }
.other-chip {
  display: inline-flex; align-items: center; gap: 10px; padding: 11px 20px;
  border-radius: 999px; background: var(--bg-page); border: 1px solid var(--border);
  font-size: .94rem; color: var(--text-secondary);
  transition: border-color .25s var(--ease), color .25s var(--ease), background-color .25s var(--ease);
}
.other-chip svg { width: 18px; height: 18px; color: var(--olive-600); }
.other-chip:hover { border-color: var(--olive-300); color: var(--olive-800); background: var(--olive-50); }

/* ---------- 9. Theme catalogue ------------------------------------------- */
.filters { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 44px; }
.filter-btn {
  padding: 10px 20px; border-radius: 999px; border: 1px solid var(--border);
  background: var(--bg-surface); color: var(--text-secondary); font-size: .92rem;
  transition: all .25s var(--ease);
}
.filter-btn:hover { border-color: var(--olive-300); color: var(--olive-800); }
.filter-btn[aria-pressed="true"] { background: var(--olive-700); border-color: var(--olive-700); color: var(--neutral-50); }
.themes { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.theme-card {
  background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius);
  overflow: hidden; transition: transform .35s var(--ease), box-shadow .35s var(--ease), opacity .3s var(--ease);
}
.theme-card:hover { transform: translateY(-6px); box-shadow: var(--shadow); }
.theme-card[hidden] { display: none; }
.theme-card__body { padding: 18px 20px 22px; }
.theme-card__top { display: flex; justify-content: space-between; align-items: center; gap: 8px; margin-bottom: 8px; }
.theme-card h3 { font-size: 1.42rem; margin: 0; }
.theme-card p { font-size: .88rem; color: var(--text-muted); margin-bottom: 14px; }
.tag { font-size: .72rem; font-weight: 500; letter-spacing: .04em; padding: 4px 10px; border-radius: 999px; white-space: nowrap; }
.tag--wedding { background: var(--rose-100); color: var(--rose-800); }
.tag--kids { background: var(--gold-100); color: var(--gold-800); }
.tag--khitan { background: #E5F0E8; color: #3E674C; }
.tag--aqiqah { background: var(--olive-100); color: var(--olive-800); }
.tag--other { background: var(--neutral-100); color: var(--neutral-800); }
.theme-card__meta { display: flex; justify-content: space-between; align-items: center; }
.theme-card__meta .badge { font-size: .72rem; padding: 3px 9px; border-radius: 6px; background: var(--gold-100); color: var(--gold-800); }

/* Theme preview art (pure CSS mini invitations) */
.tp {
  position: relative; aspect-ratio: 4 / 5; display: flex; flex-direction: column; align-items: center; justify-content: center;
  text-align: center; padding: 22px; overflow: hidden; isolation: isolate;
}
.tp__label { font-size: .55rem; letter-spacing: .3em; text-transform: uppercase; margin-bottom: 8px; }
.tp__title { font-family: var(--font-serif); font-size: 1.85rem; line-height: 1.02; }
.tp__sub { font-family: var(--font-serif); font-style: italic; font-size: .95rem; margin-top: 8px; }
.tp__frame { position: absolute; inset: 14px; border: 1px solid currentColor; opacity: .35; z-index: -1; }
.tp__arch { position: absolute; left: 50%; top: 18%; width: 62%; height: 70%; transform: translateX(-50%); border: 1px solid currentColor; border-bottom: 0; border-radius: 999px 999px 0 0; opacity: .45; z-index: -1; }
.tp__leaf { position: absolute; width: 74px; height: 74px; border-radius: 0 70% 0 70%; border: 1px solid currentColor; opacity: .35; z-index: -1; }
.tp__dot { position: absolute; border-radius: 50%; z-index: -1; }
/* Variants */
.tp--sage    { background: linear-gradient(180deg, #F3F5EF, #E4E9DD); color: var(--olive-800); }
.tp--floral  { background: var(--rose-50); color: var(--rose-800); }
.tp--classic { background: var(--olive-900); color: var(--gold-300); }
.tp--classic .tp__title { color: var(--neutral-50); }
.tp--kids    { background: var(--gold-50); color: var(--gold-800); }
.tp--kids2   { background: #EEF3F7; color: #33495A; }
.tp--khitan  { background: #EAF2EC; color: #304E3B; }
.tp--aqiqah  { background: var(--white-warm); color: var(--olive-800); }
.tp--grad    { background: var(--neutral-950); color: var(--gold-300); }
.tp--grad .tp__title { color: var(--neutral-50); }

/* ---------- 10. Features -------------------------------------------------- */
.features { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.feature {
  padding: 28px 24px; border-radius: var(--radius); background: var(--bg-surface); border: 1px solid var(--border);
  transition: border-color .3s var(--ease), transform .3s var(--ease);
}
.feature:hover { border-color: var(--olive-300); transform: translateY(-4px); }
.feature__icon { width: 48px; height: 48px; border-radius: 14px; display: grid; place-items: center; background: var(--olive-100); color: var(--olive-700); margin-bottom: 18px; }
.feature__icon svg { width: 22px; height: 22px; }
.feature h3 { font-family: var(--font-sans); font-size: 1.05rem; font-weight: 500; margin-bottom: 6px; }
.feature p { font-size: .9rem; color: var(--text-muted); margin: 0; }

/* ---------- 11. Steps ----------------------------------------------------- */
.steps { list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(4, 1fr); gap: 28px; counter-reset: step; position: relative; }
.steps::before { content: ""; position: absolute; top: 34px; left: 12%; right: 12%; height: 1px; background: repeating-linear-gradient(90deg, var(--gold-400) 0 6px, transparent 6px 12px); }
.step { position: relative; text-align: center; padding: 0 8px; }
.step__num {
  position: relative; width: 68px; height: 68px; margin: 0 auto 22px; border-radius: 50%;
  display: grid; place-items: center; background: var(--bg-page); border: 1px solid var(--gold-400);
  font-family: var(--font-serif); font-size: 1.7rem; font-weight: 600; color: var(--gold-700);
}
.step h3 { font-family: var(--font-sans); font-size: 1.06rem; font-weight: 500; margin-bottom: 6px; }
.step p { font-size: .92rem; color: var(--text-muted); }

/* ---------- 12. Pricing --------------------------------------------------- */
.pricing { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; align-items: stretch; }
.price-card {
  position: relative; display: flex; flex-direction: column;
  padding: 36px 30px 30px; border-radius: var(--radius-lg); background: var(--bg-surface); border: 1px solid var(--border);
}
.price-card h3 { font-size: 1.8rem; margin-bottom: 4px; }
.price-card .desc { font-size: .92rem; color: var(--text-muted); min-height: 3em; }
.price { display: flex; align-items: baseline; gap: 6px; margin: 14px 0 6px; }
.price strong { font-family: var(--font-serif); font-size: 2.9rem; font-weight: 600; color: var(--text-brand); line-height: 1; }
.price span { font-size: .9rem; color: var(--text-muted); }
.price-card ul { display: grid; gap: 11px; margin: 8px 0 30px; }
.price-card li { display: flex; gap: 10px; font-size: .93rem; }
.price-card li svg { width: 18px; height: 18px; flex: none; margin-top: 3px; color: var(--success-600); }
.price-card li.off { color: var(--neutral-600); }
.price-card li.off svg { color: var(--neutral-300); }
.price-card .btn { margin-top: auto; }
.price-card--featured { background: var(--olive-700); border-color: var(--olive-700); color: var(--neutral-100); transform: translateY(-12px); box-shadow: var(--shadow-lg); }
.price-card--featured h3, .price-card--featured .price strong { color: var(--neutral-50); }
.price-card--featured .desc, .price-card--featured .price span { color: var(--olive-200); }
.price-card--featured li svg { color: var(--gold-300); }
.ribbon {
  position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
  background: var(--gold-100); color: var(--gold-800); font-size: .74rem; font-weight: 500; letter-spacing: .12em; text-transform: uppercase;
  padding: 6px 16px; border-radius: 999px; border: 1px solid var(--gold-300); white-space: nowrap;
}
.pricing-note { text-align: center; margin-top: 34px; font-size: .9rem; color: var(--text-muted); }

/* ---------- 13. Testimonials --------------------------------------------- */
.sample-note {
  display: inline-block; margin: -26px auto 36px; padding: 6px 14px; border-radius: 8px;
  background: var(--white-warm); border: 1px dashed var(--rose-800); color: var(--rose-800); font-size: .82rem;
}
.testimonials { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.quote {
  position: relative; padding: 34px 30px 28px; border-radius: var(--radius); background: var(--white-warm);
  box-shadow: var(--shadow-sm);
}
.quote::before { content: "\201C"; position: absolute; top: 6px; right: 24px; font-family: var(--font-serif); font-size: 5rem; line-height: 1; color: var(--rose-300); }
.quote__stars { display: flex; gap: 3px; margin-bottom: 14px; color: var(--gold-400); }
.quote__stars svg { width: 16px; height: 16px; }
.quote blockquote { margin: 0 0 22px; font-family: var(--font-serif); font-style: italic; font-size: 1.2rem; line-height: 1.5; color: var(--text-primary); }
.quote figcaption { display: flex; align-items: center; gap: 12px; }
.avatar { width: 44px; height: 44px; border-radius: 50%; display: grid; place-items: center; font-family: var(--font-serif); font-weight: 600; font-size: 1.1rem; background: var(--olive-100); color: var(--olive-800); }
.quote figcaption b { display: block; color: var(--text-primary); font-weight: 500; font-size: .95rem; }
.quote figcaption span { font-size: .84rem; color: var(--text-muted); }

/* ---------- 14. FAQ ------------------------------------------------------- */
.faq-wrap { display: grid; grid-template-columns: .8fr 1.2fr; gap: 64px; align-items: start; }
.faq-wrap .section-head { text-align: left; margin: 0; }
.faq-list { display: grid; gap: 12px; }
.faq-item { background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius); }
.faq-item summary {
  list-style: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center; gap: 16px;
  padding: 20px 24px; font-weight: 500; color: var(--text-primary);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: ""; flex: none; width: 12px; height: 12px; border-right: 1.5px solid var(--olive-700); border-bottom: 1.5px solid var(--olive-700);
  transform: rotate(45deg) translateY(-3px); transition: transform .3s var(--ease);
}
.faq-item[open] summary::after { transform: rotate(-135deg) translateY(-3px); }
.faq-item[open] { border-color: var(--olive-300); }
.faq-item .answer { padding: 0 24px 22px; color: var(--text-secondary); font-size: .96rem; }

/* ---------- 15. CTA band -------------------------------------------------- */
.cta {
  position: relative; overflow: hidden; border-radius: 36px; background: var(--olive-700); color: var(--neutral-100);
  padding: 72px 64px; display: grid; grid-template-columns: 1.4fr 1fr; gap: 40px; align-items: center;
}
.cta::after { content: ""; position: absolute; right: 8%; top: -40px; width: 260px; height: 360px; border: 1px solid var(--gold-400); border-bottom: 0; border-radius: 130px 130px 0 0; opacity: .5; }
.cta h2 { color: var(--neutral-50); font-size: clamp(2rem, 4vw, 3rem); }
.cta p { color: var(--olive-200); margin: 0; font-size: 1.05rem; }
.cta__actions { position: relative; z-index: 1; display: flex; flex-wrap: wrap; gap: 14px; justify-content: flex-end; }

/* ---------- 16. Footer ---------------------------------------------------- */
.site-footer { background: var(--olive-900); color: var(--neutral-300); padding: 80px 0 32px; margin-top: 104px; }
.site-footer .brand { color: var(--neutral-50); }
.site-footer .brand svg { height: 44px; }
.footer__grid { display: grid; grid-template-columns: 1.4fr 1fr 1fr 1fr; gap: 40px; padding-bottom: 48px; border-bottom: 1px solid rgba(248, 244, 236, .12); }
.footer__about p { margin: 20px 0; max-width: 320px; font-size: .94rem; }
.footer__tagline { font-family: var(--font-serif); font-style: italic; font-size: 1.2rem; color: var(--gold-300); }
.site-footer h4 { font-family: var(--font-sans); font-size: .78rem; letter-spacing: .24em; text-transform: uppercase; font-weight: 500; color: var(--gold-300); margin-bottom: 18px; }
.site-footer ul { display: grid; gap: 10px; }
.site-footer a { color: var(--neutral-200); text-decoration: none; font-size: .94rem; }
.site-footer a:hover { color: var(--neutral-50); text-decoration: underline; }
.socials { display: flex; gap: 10px; margin-top: 4px; }
.socials a { width: 40px; height: 40px; border-radius: 50%; display: grid; place-items: center; border: 1px solid rgba(248, 244, 236, .22); }
.socials a:hover { background: rgba(248, 244, 236, .08); text-decoration: none; }
.socials svg { width: 18px; height: 18px; }
.footer__bottom { display: flex; flex-wrap: wrap; justify-content: space-between; gap: 12px; padding-top: 26px; font-size: .86rem; color: var(--neutral-300); }

/* ---------- 17. Floating WhatsApp ---------------------------------------- */
.wa-float {
  position: fixed; right: 22px; bottom: 22px; z-index: 60;
  display: inline-flex; align-items: center; gap: 10px; padding: 14px 20px 14px 16px;
  border-radius: 999px; background: var(--olive-700); color: var(--neutral-50); text-decoration: none; font-weight: 500;
  box-shadow: 0 12px 28px rgba(41, 42, 38, .25); transition: background-color .25s var(--ease), transform .25s var(--ease);
}
.wa-float:hover { background: var(--olive-800); color: var(--neutral-50); transform: translateY(-3px); }
.wa-float svg { width: 24px; height: 24px; }

/* ---------- 18. Reveal on scroll ----------------------------------------- */
.reveal { opacity: 0; transform: translateY(24px); transition: opacity .8s var(--ease), transform .8s var(--ease); }
.reveal.is-visible { opacity: 1; transform: none; }
.no-js .reveal { opacity: 1; transform: none; }

/* ---------- 19. Responsive ----------------------------------------------- */
@media (max-width: 1080px) {
  .events, .themes, .features { grid-template-columns: repeat(2, 1fr); }
  .hero__grid { grid-template-columns: 1fr; text-align: center; }
  .hero__lead { margin-inline: auto; }
  .hero__actions, .hero__events { justify-content: center; }
  .hero__trust { justify-content: center; }
  .eyebrow { justify-content: center; }
  .pricing { grid-template-columns: 1fr; max-width: 480px; margin-inline: auto; }
  .price-card--featured { transform: none; }
  .testimonials { grid-template-columns: 1fr; max-width: 620px; margin-inline: auto; }
  .faq-wrap { grid-template-columns: 1fr; gap: 36px; }
  .faq-wrap .section-head { text-align: center; }
  .cta { grid-template-columns: 1fr; text-align: center; padding: 56px 32px; }
  .cta__actions { justify-content: center; }
  .footer__grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 860px) {
  .nav__toggle { display: inline-flex; }
  .nav__menu {
    position: absolute; top: 76px; left: 0; right: 0; flex-direction: column; align-items: stretch; gap: 0;
    background: var(--bg-page); border-bottom: 1px solid var(--border); box-shadow: var(--shadow);
    padding: 8px 16px 20px; max-height: 0; overflow: hidden; visibility: hidden;
    transition: max-height .35s var(--ease), visibility .35s;
  }
  .nav__menu.is-open { max-height: 520px; visibility: visible; }
  .nav__menu a { padding: 14px 4px; border-bottom: 1px solid var(--border); font-size: 1.02rem; }
  .nav__menu a::after { display: none; }
  .nav__menu .btn { margin-top: 16px; border-bottom: 0; color: var(--neutral-50); }
  .steps { grid-template-columns: 1fr 1fr; row-gap: 40px; }
  .steps::before { display: none; }
}

@media (max-width: 600px) {
  .hero__visual::before { width: 320px; }
  .eyebrow { letter-spacing: .18em; font-size: .72rem; }
  .eyebrow::before, .eyebrow::after { display: none; }
  .cta::after { display: none; }
  .tp { aspect-ratio: 1 / 1; }
  .section { padding: 76px 0; }
  .hero { padding: 40px 0 72px; }
  .events, .themes, .features { grid-template-columns: 1fr; }
  .themes { max-width: 380px; margin-inline: auto; }
  .hero__trust { grid-template-columns: repeat(3, 1fr); gap: 12px; }
  .trust-item strong { font-size: 1.25rem; }
  .phone { width: 260px; }
  .float-card { display: none; }
  .steps { grid-template-columns: 1fr; }
  .footer__grid { grid-template-columns: 1fr; }
  .wa-float span { display: none; }
  .wa-float { padding: 14px; }
  .btn { white-space: normal; }
}

/* ---------- 20. Motion & print ------------------------------------------- */
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after { animation: none !important; transition: none !important; scroll-behavior: auto !important; }
  .reveal { opacity: 1; transform: none; }
}
@media print {
  .site-header, .wa-float, .nav__toggle { display: none; }
  .reveal { opacity: 1; transform: none; }
}


/* ---------- 21. Package banners, opening price, add-ons, contact (content update Okt 2026) ---------- */
.price-card .ribbon { z-index: 2; }
.price-card__banner { margin: 0 0 24px; line-height: 0; }
.price-card--featured .price-card__banner .jj-banner--shadow { box-shadow: 0 12px 28px rgba(29, 31, 27, .35); }
.price-card__banner svg { width: 100%; height: auto; display: block; }
.price-label {
  align-self: flex-start; margin-top: 6px; font-size: .72rem; font-weight: 500; letter-spacing: .14em; text-transform: uppercase;
  padding: 4px 10px; border-radius: 999px; background: var(--gold-100); color: var(--gold-800);
}
.price-card--featured .price-label { background: rgba(248, 244, 236, .14); color: var(--gold-200); }
.price-normal { font-size: .88rem; color: var(--text-muted); margin: 0 0 14px; }
.price-normal s { text-decoration-thickness: 1px; }
.price-card--featured .price-normal { color: var(--olive-200); }
.opening-note {
  max-width: 760px; margin: -24px auto 56px; text-align: center; font-size: .94rem; color: var(--gold-800);
  background: var(--gold-50); border: 1px solid var(--gold-300); border-radius: var(--radius); padding: 14px 20px;
}
.addons { max-width: 760px; margin: 56px auto 0; padding: 26px 30px; border: 1px solid var(--border); border-radius: var(--radius); background: var(--bg-page); }
.addons h3 { font-size: 1.5rem; margin-bottom: 12px; }
.addons ul { display: grid; gap: 0; }
.addons li { display: flex; justify-content: space-between; gap: 16px; padding: 11px 0; border-bottom: 1px dashed var(--border); font-size: .95rem; }
.addons li:last-child { border-bottom: 0; }
.addons b { font-weight: 500; color: var(--text-brand); white-space: nowrap; }

.contact { display: grid; grid-template-columns: .85fr 1.15fr; gap: 40px; align-items: start; }
.contact__info { display: grid; gap: 14px; }
.contact__item { display: flex; gap: 16px; align-items: flex-start; padding: 18px 20px; background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius); }
.contact__item b { display: block; color: var(--text-primary); font-weight: 500; margin-bottom: 2px; }
.contact__item a, .contact__item span, .contact__item address { font-size: .95rem; font-style: normal; color: var(--text-secondary); word-break: break-word; }
.contact__item a { color: var(--text-brand); }
.contact__icon { flex: none; width: 42px; height: 42px; border-radius: 12px; display: grid; place-items: center; background: var(--olive-100); color: var(--olive-700); }
.contact__icon svg { width: 20px; height: 20px; }
.contact__form { display: grid; gap: 16px; padding: 32px; background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.field { display: grid; gap: 6px; }
.field > span { font-size: .88rem; font-weight: 500; color: var(--text-primary); }
.field input, .field select, .field textarea {
  width: 100%; font: inherit; font-size: .96rem; color: var(--text-primary); background: var(--white-warm);
  border: 1px solid var(--border-input); border-radius: 12px; padding: 12px 14px; min-height: 48px;
}
.field textarea { resize: vertical; min-height: 110px; }
.field input:focus-visible, .field select:focus-visible, .field textarea:focus-visible { outline: 2px solid var(--focus); outline-offset: 1px; border-color: var(--olive-600); }
.field [aria-invalid="true"] { border-color: #AC5646; }
.form-status { margin: 0; font-size: .92rem; min-height: 1.4em; }
.form-status.is-ok { color: #3E674C; }
.form-status.is-error { color: #8C4436; }
.form-hint { margin: 0; font-size: .82rem; color: var(--text-muted); }
@media (max-width: 1080px) { .contact { grid-template-columns: 1fr; } }
@media (max-width: 600px) {
  .form-row { grid-template-columns: 1fr; }
  .contact__form { padding: 22px; }
  .price-card__banner { margin: 0 0 20px; }
  .opening-note { margin: -16px auto 40px; }
}

/* ---------- 22. Banner paket siap pakai (pakai: <svg class="jj-banner" ...><use href="#jj-banner-janji"/></svg>) ---------- */
.jj-banner { width: 100%; height: auto; display: block; aspect-ratio: 360 / 150; }
.jj-banner--rounded { border-radius: var(--radius); overflow: hidden; }
.jj-banner--shadow { box-shadow: var(--shadow); }

/* ---------- 23. Navbar v5 (Portal Customer + Form Order) ---------- */
.nav__menu { gap: 26px; }
.nav__actions { display: flex; align-items: center; gap: 10px; }
.nav__actions .btn svg { width: 16px; height: 16px; }
.nav__mobile-actions { display: none; }

.nav__menu .nav__mobile-actions .btn { margin-top: 0; padding: 12px 20px; border-bottom: 0; font-size: .98rem; }
.nav__menu .nav__mobile-actions .btn--outline { color: var(--olive-700); }
.order-page [hidden], .order-page[hidden] { display: none !important; }

/* ---------- 24. Theme cards with real images ---------- */
.theme-card__img { aspect-ratio: 4 / 5; background: var(--neutral-100); overflow: hidden; }
.theme-card__img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s var(--ease); }
.theme-card:hover .theme-card__img img { transform: scale(1.04); }
.theme-card__actions { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
.theme-card__actions .btn { min-height: 40px; padding: 8px 12px; font-size: .88rem; }

/* ---------- 25. Pricing link to Form Order ---------- */
.price-form-link { display: block; text-align: center; margin-top: 12px; font-size: .88rem; color: var(--text-brand); }
.price-card--featured .price-form-link { color: var(--neutral-100); }

/* ---------- 26. Form Order page ---------- */
body.is-order main#utama { display: none; }
.order-hero { padding: 56px 0 40px; background: var(--bg-page); position: relative; overflow: hidden; }
.order-hero::after { content: ""; position: absolute; right: -60px; top: 20px; width: 300px; height: 420px; border: 1px solid var(--gold-300); border-bottom: 0; border-radius: 150px 150px 0 0; opacity: .6; pointer-events: none; }
.order-hero h1 { font-size: clamp(2.2rem, 4.6vw, 3.6rem); max-width: 760px; margin-bottom: 14px; }
.order-hero h1 .accent { display: block; }
.order-hero p { max-width: 640px; font-size: 1.06rem; }
.order-back { display: flex; width: fit-content; align-items: center; gap: 8px; margin-bottom: 26px; font-size: .92rem; text-decoration: none; }
.order-back svg { width: 16px; height: 16px; transform: rotate(180deg); }
.order-steps { list-style: none; margin: 26px 0 0; padding: 0; display: flex; flex-wrap: wrap; gap: 10px; }
.order-steps li { display: inline-flex; align-items: center; gap: 10px; padding: 8px 16px 8px 8px; border-radius: 999px; background: var(--bg-surface); border: 1px solid var(--border); font-size: .9rem; }
.order-steps b { width: 26px; height: 26px; border-radius: 50%; display: grid; place-items: center; background: var(--olive-100); color: var(--olive-800); font-family: var(--font-serif); font-size: 1rem; }
.order-body { padding: 40px 0 104px; background: var(--bg-subtle); }
.order-layout { display: grid; grid-template-columns: minmax(0, 1fr) 340px; gap: 32px; align-items: start; }
.order-form { display: grid; gap: 22px; }
.order-gate { margin: 0 0 12px; font-size: .88rem; line-height: 1.5; color: #8C4436; min-height: 1.3em; }
.order-gate.is-ready { color: #3E674C; }
.order-note { margin: 18px auto 0; max-width: 46ch; font-size: .9rem; line-height: 1.6; color: #8C4436; }
.order-card { margin: 0; min-width: 0; border: 1px solid var(--border); border-radius: var(--radius-lg); background: var(--bg-surface); padding: 30px; }
.order-card legend { float: left; width: 100%; display: flex; align-items: center; gap: 12px; padding: 0; margin-bottom: 20px; font-family: var(--font-serif); font-size: 1.55rem; color: var(--text-primary); }
.order-card legend b { width: 34px; height: 34px; flex: none; border-radius: 50%; display: grid; place-items: center; background: var(--olive-700); color: var(--neutral-50); font-size: 1.05rem; font-weight: 600; }
.order-card legend small { font-family: var(--font-sans); font-size: .82rem; color: var(--text-muted); }
.order-card > :not(legend) { clear: both; }
.field-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.field--full { grid-column: 1 / -1; }
.field > span i { color: #AC5646; font-style: normal; }
.field > span small { font-weight: 400; color: var(--text-muted); }
.order-hint { font-size: .86rem; color: var(--text-muted); margin: 14px 0 0; }
.order-group + .order-group { margin-top: 0; }
.choice-grid { display: grid; gap: 12px; }
.choice-grid--cat { grid-template-columns: repeat(3, 1fr); }
.choice-grid--paket { grid-template-columns: repeat(3, 1fr); }
.choice { position: relative; display: block; cursor: pointer; }
.choice input { position: absolute; opacity: 0; inset: 0; width: 100%; height: 100%; margin: 0; cursor: pointer; }
.choice__box { display: flex; align-items: center; gap: 12px; height: 100%; padding: 14px 16px; border: 1px solid var(--border-input); border-radius: 14px; background: var(--white-warm); font-size: .94rem; color: var(--text-secondary); transition: border-color .2s var(--ease), background-color .2s var(--ease), box-shadow .2s var(--ease); }
.choice__box svg { width: 22px; height: 22px; flex: none; color: var(--olive-600); }
.choice:hover .choice__box { border-color: var(--olive-500); }
.choice input:checked + .choice__box { border-color: var(--olive-700); background: var(--olive-50); box-shadow: inset 0 0 0 1px var(--olive-700); color: var(--text-primary); }
.choice input:focus-visible + .choice__box { outline: 2px solid var(--focus); outline-offset: 2px; }
.choice--paket .choice__box { flex-direction: column; align-items: flex-start; gap: 4px; }
.choice__head { display: flex; align-items: center; gap: 8px; }
.choice__head b { font-family: var(--font-serif); font-size: 1.4rem; font-weight: 600; color: var(--text-primary); }
.choice__head em { font-style: normal; font-size: .68rem; letter-spacing: .1em; text-transform: uppercase; padding: 3px 8px; border-radius: 999px; background: var(--gold-100); color: var(--gold-800); }
.choice__price { font-family: var(--font-serif); font-size: 1.35rem; color: var(--text-brand); }
.choice__price s { font-family: var(--font-sans); font-size: .82rem; color: var(--text-muted); margin-left: 4px; }
.choice__desc { font-size: .84rem; color: var(--text-muted); }
.order-more { margin-top: 18px; border-top: 1px dashed var(--border); padding-top: 14px; }
.order-more summary { cursor: pointer; color: var(--text-brand); font-weight: 500; font-size: .94rem; margin-bottom: 14px; }
.check { display: flex; gap: 12px; align-items: flex-start; margin: 20px 0; font-size: .92rem; color: var(--text-secondary); }
.check input { width: 20px; height: 20px; flex: none; margin-top: 2px; accent-color: var(--olive-700); }
.check input[aria-invalid="true"] { outline: 2px solid #AC5646; outline-offset: 2px; }
.order-status { margin-top: 12px; }
.order-summary { position: sticky; top: 96px; }
.order-summary__card { padding: 26px; border-radius: var(--radius-lg); background: var(--olive-700); color: var(--neutral-100); box-shadow: var(--shadow); }
.order-summary__card h2 { color: var(--neutral-50); font-size: 1.6rem; margin-bottom: 16px; }
.order-summary dl { margin: 0 0 16px; display: grid; gap: 0; }
.order-summary dl div { display: flex; justify-content: space-between; gap: 12px; padding: 10px 0; border-bottom: 1px solid rgba(248, 244, 236, .16); font-size: .92rem; }
.order-summary dt { color: var(--olive-200); }
.order-summary dd { margin: 0; text-align: right; color: var(--neutral-50); font-weight: 500; }
.order-summary__note { font-size: .82rem; color: var(--olive-200); margin-bottom: 16px; }
.order-summary .btn--outline { border-color: rgba(248, 244, 236, .55); color: var(--neutral-50); }
.order-summary .btn--outline:hover { background: rgba(248, 244, 236, .1); color: var(--neutral-50); }
.order-success { grid-column: 1 / -1; text-align: center; padding: 56px 28px; border-radius: var(--radius-lg); background: var(--bg-surface); border: 1px solid var(--border); }
.order-success__icon { width: 72px; height: 72px; margin: 0 auto 18px; border-radius: 50%; display: grid; place-items: center; background: var(--olive-100); color: var(--olive-700); }
.order-success__icon svg { width: 36px; height: 36px; }
.order-success h2 { font-size: clamp(1.8rem, 3.4vw, 2.4rem); }
.order-success__actions { display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; margin-top: 24px; }

@media (max-width: 1180px) {
  .nav__actions { display: none; }
  .nav__toggle { display: inline-flex; }
  .nav__menu {
    position: absolute; top: 76px; left: 0; right: 0; flex-direction: column; align-items: stretch; gap: 0;
    background: var(--bg-page); border-bottom: 1px solid var(--border); box-shadow: var(--shadow);
    padding: 8px 16px 20px; max-height: 0; overflow: hidden; visibility: hidden;
    transition: max-height .35s var(--ease), visibility .35s;
  }
  .nav__menu.is-open { max-height: 640px; visibility: visible; }
  .nav__menu > a { padding: 14px 4px; border-bottom: 1px solid var(--border); font-size: 1.02rem; }
  .nav__menu a::after { display: none; }
  .nav__mobile-actions { display: grid; gap: 10px; margin-top: 16px; }
  .nav__mobile-actions .btn--primary { color: var(--neutral-50); }
  .nav__mobile-actions .btn svg { width: 16px; height: 16px; }
}
@media (max-width: 1080px) {
  .order-layout { grid-template-columns: 1fr; }
  .order-summary { position: static; order: -1; }
  .choice-grid--cat { grid-template-columns: repeat(2, 1fr); }
  .choice-grid--paket { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .order-card { padding: 22px 18px; }
  .field-grid { grid-template-columns: 1fr; }
  .choice-grid--cat { grid-template-columns: 1fr; }
  .order-hero::after { display: none; }
}
/* ---------- 27. Katalog Tema & pemilih paket (v6) ---------- */
body.is-catalog main#utama { display: none; }
.catalog-page[hidden], .pkg-picker[hidden] { display: none !important; }
.theme-card__img:has(img[src$=".webp"]) { aspect-ratio: 1 / 1; }
.catalog-cta { text-align: center; margin-top: 40px; }
.catalog-cta .btn svg { width: 18px; height: 18px; }
.catalog-cta__count:not(:empty)::before { content: "("; } .catalog-cta__count:not(:empty)::after { content: ")"; }
.catalog-tools { display: grid; gap: 16px; justify-items: center; margin-bottom: 32px; }
.catalog-filters { margin-bottom: 0; }
.catalog-chip { padding: 10px 20px; border-radius: 999px; border: 1px solid var(--border); background: var(--bg-surface);
  color: var(--text-secondary); font: inherit; font-size: .92rem; cursor: pointer; transition: all .25s var(--ease); }
.catalog-chip:hover { border-color: var(--olive-300); color: var(--olive-800); }
.catalog-chip[aria-pressed="true"] { background: var(--olive-700); border-color: var(--olive-700); color: var(--neutral-50); }
.catalog-chip span { opacity: .7; font-size: .85em; }
.catalog-search { width: min(100%, 460px); }
.catalog-count { margin: 0; font-size: .9rem; color: var(--text-muted); }
.catalog-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(230px, 1fr)); gap: 22px; }
.catalog-grid .theme-card__img { aspect-ratio: 1 / 1; }
.catalog-grid .theme-card h3 { font-size: 1.22rem; line-height: 1.2; }
.catalog-grid .theme-card__top { align-items: flex-start; flex-direction: column; gap: 6px; }
.catalog-grid .theme-card__actions { margin-top: 14px; }
.catalog-empty { text-align: center; margin: 24px 0; color: var(--text-muted); }
.catalog-more { text-align: center; margin-top: 36px; }
.pkg-picker { position: fixed; inset: 0; z-index: 200; display: grid; place-items: center; padding: 16px; }
.pkg-picker__backdrop { position: absolute; inset: 0; background: rgba(41, 42, 38, .55); }
.pkg-picker__panel { position: relative; width: min(100%, 520px); max-height: calc(100vh - 32px); overflow: auto; background: var(--bg-surface);
  border-radius: var(--radius-lg); padding: 28px; box-shadow: var(--shadow); }
.pkg-picker__close { position: absolute; top: 14px; right: 14px; width: 40px; height: 40px; border-radius: 50%; border: 1px solid var(--border);
  background: var(--bg-page); color: var(--text-primary); display: grid; place-items: center; cursor: pointer; }
.pkg-picker__close svg { width: 18px; height: 18px; }
.pkg-picker__head { display: flex; gap: 16px; align-items: center; padding-right: 40px; }
.pkg-picker__head img { width: 72px; height: 72px; border-radius: var(--radius-sm); object-fit: cover; flex: none; background: var(--neutral-100); }
.pkg-picker__head h2 { font-size: 1.6rem; margin: 2px 0 4px; }
.pkg-picker__head a { font-size: .88rem; display: inline-flex; gap: 6px; align-items: center; }
.pkg-picker__head a svg { width: 14px; height: 14px; }
.pkg-picker__lead { margin: 18px 0 14px; font-size: .92rem; color: var(--text-muted); }
.pkg-picker__list { display: grid; gap: 10px; }
.pkg-option { display: grid; grid-template-columns: 1fr auto; gap: 4px 12px; align-items: center; padding: 14px 18px; border: 1px solid var(--border);
  border-radius: var(--radius); background: var(--bg-page); color: var(--text-primary); text-decoration: none; transition: border-color .2s, transform .2s; }
.pkg-option:hover, .pkg-option:focus-visible { border-color: var(--olive-600); transform: translateY(-2px); }
.pkg-option b { font-family: var(--font-serif); font-size: 1.3rem; font-weight: 600; }
.pkg-option em { font-style: normal; font-size: .7rem; letter-spacing: .06em; text-transform: uppercase; margin-left: 8px; padding: 2px 8px;
  border-radius: 999px; background: var(--rose-100); color: var(--rose-800); vertical-align: middle; }
.pkg-option__price { text-align: right; font-weight: 500; }
.pkg-option__price s { display: block; font-size: .78rem; color: var(--text-muted); font-weight: 400; }
.pkg-option__meta { grid-column: 1 / -1; font-size: .84rem; color: var(--text-muted); }
.pkg-picker__form { display: block; text-align: center; margin-top: 16px; font-size: .9rem; }
body.has-picker { overflow: hidden; }
@media (max-width: 600px) {
  .catalog-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
  .catalog-grid .theme-card__body { padding: 12px 12px 14px; }
  .catalog-grid .theme-card h3 { font-size: 1.02rem; }
  .catalog-grid .theme-card__actions { grid-template-columns: 1fr; gap: 6px; }
  .catalog-grid .theme-card__actions .btn { min-height: 36px; padding: 6px 10px; font-size: .82rem; }
  .catalog-grid .tag { font-size: .66rem; padding: 3px 8px; }
  .pkg-picker { place-items: end center; padding: 0; }
  .pkg-picker__panel { width: 100%; border-radius: var(--radius-lg) var(--radius-lg) 0 0; padding: 24px 18px 28px; max-height: 88vh; }
}
/* ---------- 28. Katalog Video Ucapan (v6) ---------- */
body.is-video main#utama { display: none; }
.vplayer[hidden] { display: none !important; }
.vcat-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 22px; }
.video-card { background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius);
  overflow: hidden; box-shadow: var(--shadow-sm); transition: transform .3s var(--ease), box-shadow .3s var(--ease); }
.video-card:hover { transform: translateY(-6px); box-shadow: var(--shadow); }
.video-card__media { position: relative; display: block; width: 100%; padding: 0; border: 0; cursor: pointer;
  aspect-ratio: 9 / 16; background: linear-gradient(160deg, var(--olive-200), var(--neutral-100)); overflow: hidden; }
.video-card__media img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s var(--ease); }
.video-card:hover .video-card__media img { transform: scale(1.04); }
.video-card__play { position: absolute; inset: 0; display: grid; place-items: center;
  background: linear-gradient(180deg, rgba(41,42,38,.08) 40%, rgba(41,42,38,.5)); transition: background .3s var(--ease); }
.video-card__media:hover .video-card__play, .video-card__media:focus-visible .video-card__play { background: rgba(41,42,38,.42); }
.video-card__play span { width: 54px; height: 54px; border-radius: 50%; background: rgba(255,253,249,.92);
  color: var(--olive-800); display: grid; place-items: center; box-shadow: var(--shadow-sm); transition: transform .3s var(--ease); }
.video-card__media:hover .video-card__play span { transform: scale(1.08); }
.video-card__play svg { width: 22px; height: 22px; margin-left: 3px; }
.video-card__dur { position: absolute; bottom: 10px; right: 10px; padding: 3px 9px; border-radius: 999px;
  background: rgba(41,42,38,.72); color: var(--neutral-50); font-size: .72rem; letter-spacing: .03em; }
.video-card__body { padding: 16px 18px 20px; }
.video-card__top { display: flex; flex-direction: column; align-items: flex-start; gap: 6px; margin-bottom: 12px; }
.video-card__body h3 { font-size: 1.18rem; line-height: 1.2; margin: 0; }
.video-card__actions { display: grid; gap: 8px; }
.video-card__actions .btn { min-height: 40px; padding: 8px 12px; font-size: .88rem; }
.vplayer { position: fixed; inset: 0; z-index: 210; display: grid; place-items: center; padding: 16px; }
.vplayer__backdrop { position: absolute; inset: 0; background: rgba(29,31,27,.74); }
.vplayer__panel { position: relative; width: min(100%, 880px); max-height: calc(100vh - 32px); overflow: auto;
  background: var(--bg-surface); border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow-lg);
  display: grid; grid-template-columns: minmax(0, 260px) 1fr; gap: 24px; align-items: start; }
.vplayer__close { position: absolute; top: 12px; right: 12px; z-index: 2; width: 40px; height: 40px; border-radius: 50%;
  border: 1px solid var(--border); background: var(--bg-page); color: var(--text-primary); display: grid; place-items: center; cursor: pointer; }
.vplayer__close svg { width: 18px; height: 18px; }
.vplayer__stage { background: var(--neutral-950); border-radius: var(--radius); overflow: hidden; }
.vplayer__stage video { display: block; width: 100%; aspect-ratio: 9 / 16; background: var(--neutral-950); }
.vplayer__meta { padding: 8px 40px 8px 0; }
.vplayer__meta h2 { font-size: 1.7rem; margin: 4px 0 10px; }
.vplayer__meta p { font-size: .92rem; color: var(--text-muted); }
.vplayer__specs { list-style: none; margin: 0 0 20px; padding: 0; display: grid; gap: 8px; font-size: .9rem; }
.vplayer__specs li { display: flex; gap: 9px; align-items: center; color: var(--text-secondary); }
.vplayer__specs svg { width: 16px; height: 16px; color: var(--olive-600); flex: none; }
.vplayer__actions { display: grid; gap: 10px; }
@media (max-width: 760px) {
  .vplayer { place-items: end center; padding: 0; }
  .vplayer__panel { width: 100%; grid-template-columns: 1fr; gap: 16px; max-height: 92vh;
    border-radius: var(--radius-lg) var(--radius-lg) 0 0; padding: 18px 18px 24px; }
  .vplayer__stage { width: min(100%, 240px); margin: 10px auto 0; }
  .vplayer__meta { padding: 0; text-align: center; }
  .vplayer__specs { justify-items: center; }
  .vplayer__specs li { justify-content: center; }
}
@media (max-width: 600px) {
  .vcat-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
  .video-card__body { padding: 12px 12px 14px; }
  .video-card__body h3 { font-size: 1rem; }
  .video-card__play span { width: 44px; height: 44px; }
  .video-card__play svg { width: 18px; height: 18px; }
  .video-card .tag { font-size: .66rem; padding: 3px 8px; }
}

/* ---------- 28. v7 (21 Okt 2026): intro amplop, promo opening, custom tema, S&K, animasi buka undangan ---------- */
/* Palet tetap: olive, ivory, gold, charcoal, dusty rose. Semua animasi mati bila "kurangi animasi" aktif (bagian 20). */

/* animasi lipat (rotateX) tidak boleh memicu scroll ke samping di HP */
html, body { overflow-x: clip; }

/* 28.1 Intro amplop */
.jj-intro-active, .jj-intro-active body { overflow: hidden; }
.jj-intro {
  position: fixed; inset: 0; z-index: 300; display: grid; place-items: center; overflow: hidden;
  background: radial-gradient(120% 80% at 50% 0%, var(--olive-800) 0%, var(--olive-900) 58%, var(--olive-950) 100%);
  color: var(--neutral-50); text-align: center;
}
.jj-intro[hidden] { display: none; }
.jj-intro::before {
  content: ""; position: absolute; left: 50%; top: 50%; width: min(560px, 120vw); aspect-ratio: 5 / 6;
  transform: translate(-50%, -46%); border: 1px solid rgba(198, 166, 107, .35); border-bottom: 0;
  border-radius: 999px 999px 0 0; pointer-events: none;
}
.jj-intro__stage { position: relative; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 24px 16px; }
.jj-intro__to { margin: 0; font: 500 .72rem/1.4 var(--font-sans); letter-spacing: .24em; text-transform: uppercase; color: var(--gold-300); }
.jj-intro__title { margin: 0 0 14px; font: 500 clamp(1.5rem, 5.4vw, 2.1rem)/1.2 var(--font-serif); font-style: italic; }
.jj-env { position: relative; width: min(340px, 80vw); aspect-ratio: 3 / 2; perspective: 1100px; animation: jjFloat 4.5s ease-in-out infinite; }
.jj-env__back { position: absolute; inset: 0; border-radius: 12px; background: var(--gold-300); box-shadow: 0 30px 60px rgba(0, 0, 0, .35); }
.jj-env__card {
  position: absolute; left: 6%; right: 6%; top: 7%; bottom: 7%; z-index: 1; border-radius: 8px;
  display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 6px; padding: 10px;
  background: var(--white-warm); color: var(--olive-800); border: 1px solid var(--gold-300);
  box-shadow: 0 10px 26px rgba(0, 0, 0, .14);
  transition: transform 1s var(--ease) .85s, z-index 0s .85s;
}
.jj-env__card svg { width: 66%; height: auto; }
.jj-env__card p { margin: 0; font: italic 500 1.02rem/1.2 var(--font-serif); color: var(--neutral-950); }
.jj-env__card small { font: 500 .62rem/1 var(--font-sans); letter-spacing: .18em; text-transform: uppercase; color: var(--gold-700); }
.jj-env__front {
  position: absolute; inset: 0; z-index: 2; border-radius: 12px;
  background: linear-gradient(180deg, var(--gold-100), var(--gold-200));
  clip-path: polygon(0 0, 50% 56%, 100% 0, 100% 100%, 0 100%);
}
.jj-env__front::after {
  content: ""; position: absolute; inset: 0; border-radius: 12px;
  background: linear-gradient(to top right, transparent 49.5%, rgba(112, 88, 41, .16) 50%, transparent 51%),
              linear-gradient(to top left, transparent 49.5%, rgba(112, 88, 41, .16) 50%, transparent 51%);
}
.jj-env__flap {
  position: absolute; left: 0; right: 0; top: 0; height: 60%; z-index: 3; border-radius: 12px 12px 0 0;
  background: linear-gradient(180deg, var(--gold-300), var(--gold-400));
  clip-path: polygon(0 0, 100% 0, 50% 100%); transform-origin: 50% 0;
  transition: transform .85s var(--ease) .2s, z-index 0s .62s;
}
.jj-env__seal {
  position: absolute; left: 50%; top: 60%; z-index: 4; width: 66px; height: 66px; margin: -33px 0 0 -33px;
  display: grid; place-items: center; border-radius: 50%; color: var(--gold-200);
  background: radial-gradient(circle at 35% 30%, var(--olive-600), var(--olive-800) 72%);
  box-shadow: 0 6px 16px rgba(0, 0, 0, .35), inset 0 0 0 3px rgba(215, 195, 160, .35);
  transition: transform .4s var(--ease), opacity .4s var(--ease);
}
.jj-env__seal svg { width: 30px; height: 38px; }
.jj-intro__open { margin-top: 18px; background: var(--gold-400); color: var(--neutral-950); border-color: var(--gold-400); }
.jj-intro__open:hover { background: var(--gold-300); color: var(--neutral-950); transform: translateY(-2px); }
.jj-intro__skip {
  position: absolute; top: 18px; right: 18px; z-index: 2; padding: 8px 18px; border-radius: 999px; cursor: pointer;
  background: transparent; color: var(--neutral-50); border: 1px solid rgba(248, 244, 236, .4); font: 500 .85rem var(--font-sans);
}
.jj-intro__skip:hover { background: rgba(248, 244, 236, .1); }
.jj-intro__sparks { position: absolute; inset: 0; pointer-events: none; }
.jj-intro__sparks i {
  position: absolute; width: 6px; height: 6px; transform: rotate(45deg); background: var(--gold-300); opacity: 0;
  animation: jjSpark 5s ease-in-out infinite;
}
/* urutan buka: segel lepas → tutup amplop terbuka → kartu naik → layar membuka */
.jj-intro.is-opening .jj-env { animation: none; }
.jj-intro.is-opening .jj-env__seal { transform: scale(.3) rotate(-25deg); opacity: 0; }
.jj-intro.is-opening .jj-env__flap { transform: rotateX(180deg); z-index: 0; }
.jj-intro.is-opening .jj-env__card { transform: translateY(-62%); z-index: 3; }
.jj-intro.is-opening .jj-intro__open, .jj-intro.is-opening .jj-intro__skip { opacity: 0; pointer-events: none; transition: opacity .3s; }
.jj-intro.is-revealing { animation: jjIntroOut .9s var(--ease) forwards; }
.jj-intro.is-revealing .jj-env__card { transform: translateY(-62%) scale(1.35); transition: transform .9s var(--ease); }
@keyframes jjIntroOut { 0% { opacity: 1; clip-path: circle(150% at 50% 45%); } 100% { opacity: 0; clip-path: circle(0% at 50% 40%); } }
@keyframes jjFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
@keyframes jjSpark { 0%, 100% { opacity: 0; transform: translateY(0) rotate(45deg) scale(.6); } 40% { opacity: .9; } 70% { opacity: .2; transform: translateY(-40px) rotate(45deg) scale(1); } }

/* halaman "terbuka" setelah intro: hero menahan animasinya sampai amplop terbuka */
.jj-intro-active .hero .reveal { opacity: 0 !important; transform: translateY(28px) scale(.98) !important; }

/* 28.2 Animasi buka undangan (lebih hidup) */
.reveal { transform: perspective(1000px) translateY(30px) rotateX(7deg); transform-origin: 50% 0; }
.reveal.is-visible { transform: none; }
.pricing .reveal:nth-child(2), .custom-grid .reveal:nth-child(2), .event-grid .reveal:nth-child(2) { transition-delay: .1s; }
.pricing .reveal:nth-child(3), .custom-grid .reveal:nth-child(3), .event-grid .reveal:nth-child(3) { transition-delay: .2s; }
.section-head.reveal::after {
  content: ""; display: block; width: 0; height: 1px; margin: 20px auto 0;
  background: linear-gradient(90deg, transparent, var(--gold-400), transparent); transition: width 1.2s var(--ease) .35s;
}
.section-head.reveal.is-visible::after { width: 96px; }
.faq-wrap .section-head.reveal::after { margin-left: 0; }
.jj-route-anim main#utama:not([hidden]), .jj-route-anim .order-page:not([hidden]), .jj-route-anim .catalog-page:not([hidden]) {
  animation: jjPageOpen .7s var(--ease) both;
}
@keyframes jjPageOpen { from { opacity: 0; transform: translateY(18px) scale(.99); } to { opacity: 1; transform: none; } }

/* ornamen hero: kelopak/lozenge emas melayang */
.hero > .container { position: relative; z-index: 1; }
.hero__petals { position: absolute; inset: 0; pointer-events: none; z-index: 0; }
.hero__petals i {
  position: absolute; width: 10px; height: 10px; border-radius: 0 60% 0 60%; background: var(--gold-300); opacity: .45;
  animation: jjPetal 14s linear infinite;
}
.hero__petals i:nth-child(1) { left: 6%; animation-delay: -2s; }
.hero__petals i:nth-child(2) { left: 18%; animation-delay: -9s; background: var(--rose-300); }
.hero__petals i:nth-child(3) { left: 34%; animation-delay: -5s; width: 7px; height: 7px; }
.hero__petals i:nth-child(4) { left: 52%; animation-delay: -12s; background: var(--olive-300); }
.hero__petals i:nth-child(5) { left: 68%; animation-delay: -1s; background: var(--rose-300); width: 8px; height: 8px; }
.hero__petals i:nth-child(6) { left: 82%; animation-delay: -7s; }
.hero__petals i:nth-child(7) { left: 93%; animation-delay: -4s; background: var(--olive-300); }
@keyframes jjPetal {
  0% { top: -4%; transform: translateX(0) rotate(0); opacity: 0; }
  10% { opacity: .5; }
  50% { transform: translateX(26px) rotate(180deg); }
  90% { opacity: .4; }
  100% { top: 104%; transform: translateX(-12px) rotate(360deg); opacity: 0; }
}
.hero__promo {
  display: inline-flex; align-items: center; gap: 10px; margin-bottom: 18px; padding: 8px 16px 8px 12px;
  border-radius: 999px; background: var(--white-warm); border: 1px solid var(--gold-300);
  color: var(--olive-800); font: 500 .86rem/1.3 var(--font-sans); text-decoration: none; box-shadow: var(--shadow-sm);
  transition: transform .25s var(--ease), box-shadow .25s var(--ease);
}
.hero__promo:hover { transform: translateY(-2px); box-shadow: var(--shadow); color: var(--olive-800); }
.hero__promo-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--gold-400); box-shadow: 0 0 0 0 rgba(198, 166, 107, .6); animation: jjPulse 2s infinite; }
@keyframes jjPulse { 0% { box-shadow: 0 0 0 0 rgba(198, 166, 107, .6); } 70% { box-shadow: 0 0 0 10px rgba(198, 166, 107, 0); } 100% { box-shadow: 0 0 0 0 rgba(198, 166, 107, 0); } }

/* kartu harga: kilau emas pada paket rekomendasi */
.price-card--featured { position: relative; overflow: hidden; }
.price-card--featured::after {
  content: ""; position: absolute; top: 0; left: -60%; width: 40%; height: 100%; pointer-events: none;
  background: linear-gradient(100deg, transparent, rgba(255, 253, 249, .22), transparent);
  transform: skewX(-18deg); animation: jjShine 5.5s ease-in-out infinite 1.5s;
}
@keyframes jjShine { 0%, 70% { left: -60%; } 100% { left: 130%; } }
.price-card { transition: transform .35s var(--ease), box-shadow .35s var(--ease); }
.price-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.opening-note a { color: inherit; font-weight: 500; }

/* 28.3 Promo opening */
.btn--gold { background: var(--gold-400); color: var(--neutral-950); border-color: var(--gold-400); }
.btn--gold:hover { background: var(--gold-300); color: var(--neutral-950); transform: translateY(-2px); }
.btn--ghost-light { background: transparent; color: var(--neutral-50); border: 1px solid rgba(248, 244, 236, .45); }
.btn--ghost-light:hover { background: rgba(248, 244, 236, .1); color: var(--neutral-50); }
.promo-opening {
  position: relative; overflow: hidden; padding: 72px 0; color: var(--neutral-50);
  background: radial-gradient(90% 120% at 85% 0%, var(--olive-700) 0%, var(--olive-900) 60%);
}
.promo-opening[hidden] { display: none; }
.promo-opening__arch { position: absolute; right: -60px; bottom: -40px; width: 420px; height: auto; fill: none; stroke: rgba(198, 166, 107, .28); stroke-width: 1.4; pointer-events: none; }
.promo-opening__grid { position: relative; display: grid; grid-template-columns: 1.15fr .85fr; gap: 48px; align-items: center; }
.promo-eyebrow { display: inline-block; margin-bottom: 14px; font: 500 .78rem/1.4 var(--font-sans); letter-spacing: .2em; text-transform: uppercase; color: var(--gold-300); }
.promo-opening h2 { margin: 0 0 14px; font: 500 clamp(2rem, 4.4vw, 3rem)/1.1 var(--font-serif); color: var(--neutral-50); }
.promo-opening h2 .accent { color: var(--gold-300); font-style: italic; }
.promo-opening__lead { margin: 0 0 24px; color: var(--olive-200); max-width: 34em; }
.promo-opening__lead b { color: var(--neutral-50); font-weight: 500; }
.promo-prices { list-style: none; margin: 0 0 28px; padding: 0; display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }
.promo-prices li {
  display: flex; flex-direction: column; gap: 2px; padding: 14px 16px; border-radius: var(--radius);
  background: rgba(248, 244, 236, .06); border: 1px solid rgba(198, 166, 107, .3);
}
.promo-prices li.is-hero { background: var(--neutral-50); color: var(--neutral-950); border-color: var(--gold-400); }
.promo-prices span { font: 500 .78rem var(--font-sans); letter-spacing: .12em; text-transform: uppercase; color: var(--gold-300); }
.promo-prices li.is-hero span { color: var(--gold-700); }
.promo-prices b { font: 600 1.7rem/1.1 var(--font-serif); }
.promo-prices s { font-size: .85rem; opacity: .7; }
.promo-opening__actions { display: flex; flex-wrap: wrap; gap: 12px; }
.promo-opening__timer {
  position: relative; padding: 34px 26px 26px; border-radius: var(--radius-lg); text-align: center;
  background: rgba(248, 244, 236, .05); border: 1px solid rgba(198, 166, 107, .35);
}
.promo-env { position: relative; width: 88px; height: 58px; margin: -66px auto 18px; border-radius: 8px; background: var(--gold-200); box-shadow: 0 10px 20px rgba(0, 0, 0, .25); }
.promo-env__flap { position: absolute; inset: 0 0 auto 0; height: 62%; border-radius: 8px 8px 0 0; background: var(--gold-400); clip-path: polygon(0 0, 100% 0, 50% 100%); transform-origin: 50% 0; animation: jjFlap 4s ease-in-out infinite; }
.promo-env__seal { position: absolute; left: 50%; top: 62%; width: 26px; height: 26px; margin: -13px 0 0 -13px; border-radius: 50%; display: grid; place-items: center; background: var(--olive-700); color: var(--gold-200); }
.promo-env__seal svg { width: 12px; height: 15px; }
@keyframes jjFlap { 0%, 55%, 100% { transform: rotateX(0); } 70%, 85% { transform: rotateX(160deg); } }
.promo-timer__label { margin: 0 0 14px; font: 500 .82rem var(--font-sans); letter-spacing: .14em; text-transform: uppercase; color: var(--gold-300); }
.promo-timer { display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; }
.promo-timer div { padding: 12px 4px; border-radius: 12px; background: rgba(29, 31, 27, .35); }
.promo-timer b { display: block; font: 600 2rem/1 var(--font-serif); color: var(--neutral-50); font-variant-numeric: lining-nums tabular-nums; }
.promo-timer small { font-size: .7rem; letter-spacing: .1em; text-transform: uppercase; color: var(--olive-200); }
.promo-timer__note { margin: 14px 0 0; font-size: .82rem; color: var(--olive-200); }

/* 28.4 Custom tema */
.custom-grid { display: grid; grid-template-columns: 1fr 1fr 1.2fr; gap: 20px; }
.custom-card { padding: 28px; border-radius: var(--radius-lg); background: var(--bg-surface); border: 1px solid var(--border); box-shadow: var(--shadow-sm); }
.custom-card--deep { background: var(--olive-900); color: var(--neutral-50); border-color: var(--olive-900); }
.custom-card--deep h3 { color: var(--neutral-50); }
.custom-card--deep p { color: var(--olive-200); }
.custom-card--deep .custom-card__tag { color: var(--gold-300); }
.custom-card--opt { display: grid; gap: 18px; background: var(--gold-50); border-color: var(--gold-200); }
.custom-card--opt > div + div { padding-top: 18px; border-top: 1px solid var(--gold-200); }
.custom-card__tag { font: 500 .76rem var(--font-sans); letter-spacing: .16em; text-transform: uppercase; color: var(--gold-700); }
.custom-card h3 { margin: 8px 0 8px; font: 600 2.1rem/1.1 var(--font-serif); }
.custom-card--opt h3 { font-size: 1.6rem; }
.custom-card p { margin: 0; color: var(--text-muted); font-size: .95rem; }
.custom-notes { list-style: none; margin: 28px 0 0; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 26px; color: var(--text-secondary); font-size: .92rem; }
.custom-notes li::before { content: ""; display: inline-block; width: 7px; height: 7px; margin-right: 10px; transform: rotate(45deg) translateY(-2px); background: var(--gold-400); }
.custom-cta { margin-top: 28px; text-align: center; }

/* 28.5 Syarat & ketentuan */
.sk-wrap { max-width: 860px; }
.sk-list { display: grid; gap: 12px; }
.sk-item { border-radius: var(--radius); background: var(--bg-surface); border: 1px solid var(--border); overflow: hidden; }
.sk-item[open] { border-color: var(--gold-300); box-shadow: var(--shadow-sm); }
.sk-item summary {
  display: flex; align-items: center; gap: 14px; padding: 18px 22px; cursor: pointer; list-style: none;
  font: 500 1.25rem/1.3 var(--font-serif); color: var(--text-primary);
}
.sk-item summary::-webkit-details-marker { display: none; }
.sk-item summary::after { content: "+"; margin-left: auto; font: 400 1.4rem var(--font-sans); color: var(--gold-700); transition: transform .3s var(--ease); }
.sk-item[open] summary::after { transform: rotate(45deg); }
.sk-num { font: 500 .8rem var(--font-sans); letter-spacing: .1em; color: var(--gold-700); }
.sk-item ul { margin: 0; padding: 0 26px 20px 52px; color: var(--text-secondary); font-size: .95rem; }
.sk-item li + li { margin-top: 8px; }
.sk-item[open] ul { animation: jjPageOpen .5s var(--ease) both; }

@media (max-width: 960px) {
  .promo-opening__grid, .custom-grid { grid-template-columns: 1fr; }
  .promo-opening { padding: 56px 0 64px; text-align: center; }
  .promo-opening__lead { margin-left: auto; margin-right: auto; }
  .promo-opening__actions { justify-content: center; }
  .promo-opening__timer { margin-top: 44px; }
}
@media (max-width: 560px) {
  .promo-prices { grid-template-columns: 1fr; }
  .promo-prices li { flex-direction: row; align-items: baseline; justify-content: space-between; gap: 10px; }
  .promo-prices b { font-size: 1.4rem; margin-left: auto; }
  .promo-timer b { font-size: 1.6rem; }
  .sk-item ul { padding: 0 18px 18px 36px; }
  .hero__promo { font-size: .8rem; }
}
@media (prefers-reduced-motion: reduce) {
  .jj-intro { display: none !important; }
  .reveal { transform: none !important; }
  .hero__petals { display: none; }
}

/* ---------- 29. v8: Form Order lengkap + pembayaran interaktif ---------- */
.order-hint--lead { margin-top: -6px; margin-bottom: 16px; }
.choice-grid--cat { grid-template-columns: repeat(5, 1fr); }
.choice-grid--cat .choice__box { flex-direction: column; text-align: center; justify-content: center; gap: 8px; min-height: 104px; transition: transform .25s var(--ease), border-color .25s var(--ease), background-color .25s var(--ease); }
.choice-grid--cat .choice__box svg { width: 26px; height: 26px; transition: transform .35s var(--ease); }
.choice-grid--cat .choice input:checked + .choice__box svg { transform: scale(1.15) rotate(-6deg); color: var(--olive-800); }
.choice-grid--cat .choice:hover .choice__box { transform: translateY(-3px); }
.couple-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin: 16px 0; }
.couple-card { display: grid; gap: 12px; padding: 18px; border-radius: var(--radius); background: var(--olive-50); border: 1px solid var(--olive-200); }
.couple-card h4, .event-block h4 { margin: 0; font: 600 1.2rem/1.2 var(--font-serif); color: var(--olive-800); }
.field-grid--2 { grid-template-columns: 1fr 1fr; gap: 10px; }
.event-block { display: grid; gap: 12px; padding: 18px; border-radius: var(--radius); border: 1px dashed var(--gold-300); background: var(--gold-50); }
.opt-row { display: flex; flex-wrap: wrap; gap: 8px 22px; margin: 12px 0 0; }
.check--inline { margin: 0; align-items: center; }
.music-pick { display: flex; flex-wrap: wrap; align-items: center; gap: 8px 20px; padding: 14px 16px; border-radius: var(--radius); background: var(--bg-subtle); }
.music-pick .field, .music-pick .order-hint { flex-basis: 100%; margin: 4px 0 0; }
.field__label { font-weight: 500; color: var(--text-primary); margin-right: 6px; }

/* isian dinamis */
.dyn-list { display: grid; gap: 12px; margin-top: 14px; }
.dyn-item { padding: 16px; border-radius: var(--radius); border: 1px solid var(--border); background: var(--bg-page); }
.dyn-item.is-new { animation: jjItemIn .45s var(--ease) both; }
.dyn-item.is-leaving { animation: jjItemOut .26s var(--ease) both; }
@keyframes jjItemIn { from { opacity: 0; transform: translateY(-8px) scale(.98); } to { opacity: 1; transform: none; } }
@keyframes jjItemOut { to { opacity: 0; transform: translateX(24px); } }
.dyn-item__head { display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px; }
.dyn-item__title { font: 600 1.1rem var(--font-serif); color: var(--olive-800); }
.dyn-item__del { border: 0; background: none; color: var(--rose-800); font: 500 .85rem var(--font-sans); cursor: pointer; padding: 4px 8px; border-radius: 8px; }
.dyn-item__del:hover { background: var(--rose-100); }
.btn-add {
  display: inline-flex; align-items: center; gap: 8px; margin-top: 14px; padding: 10px 16px; border-radius: 999px; cursor: pointer;
  border: 1px dashed var(--olive-500); background: transparent; color: var(--olive-800); font: 500 .92rem var(--font-sans);
  transition: background-color .2s var(--ease), transform .2s var(--ease);
}
.btn-add span { font-size: 1.2rem; line-height: 1; }
.btn-add small { color: var(--text-muted); font-weight: 400; }
.btn-add:hover:not(:disabled) { background: var(--olive-50); transform: translateY(-1px); }
.btn-add:disabled { opacity: .45; cursor: not-allowed; }

/* add-on */
.addon-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
.addon-pick { position: relative; cursor: pointer; }
.addon-pick input { position: absolute; opacity: 0; inset: 0; cursor: pointer; }
.addon-pick > span {
  display: grid; grid-template-columns: 1fr auto; gap: 2px 10px; padding: 14px 16px 14px 48px; border-radius: var(--radius);
  border: 1px solid var(--border-input); background: var(--bg-surface); transition: all .25s var(--ease); position: relative;
}
.addon-pick > span::before {
  content: ""; position: absolute; left: 16px; top: 16px; width: 20px; height: 20px; border-radius: 6px; border: 1.5px solid var(--olive-500);
  transition: all .25s var(--ease);
}
.addon-pick b { font-weight: 500; }
.addon-pick small { grid-column: 1; color: var(--text-muted); font-size: .84rem; }
.addon-pick em { grid-column: 2; grid-row: 1 / span 2; align-self: center; font: 600 1.1rem var(--font-serif); font-style: normal; color: var(--olive-800); }
.addon-pick input:checked + span { border-color: var(--olive-700); background: var(--olive-50); box-shadow: inset 0 0 0 1px var(--olive-700); }
.addon-pick input:checked + span::before { background: var(--olive-700) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23F8F4EC' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M5 12l5 5 9-10'/%3E%3C/svg%3E") center / 14px no-repeat; border-color: var(--olive-700); }
.addon-pick input:focus-visible + span { outline: 2px solid var(--focus); outline-offset: 2px; }

/* rincian biaya di ringkasan */
.sum-bill { margin: 4px 0 16px; padding: 14px; border-radius: 14px; background: rgba(248, 244, 236, .08); border: 1px solid rgba(198, 166, 107, .35); }
.sum-bill__row, .sum-bill__total, .sum-bill__now { display: flex; justify-content: space-between; gap: 10px; font-size: .88rem; padding: 4px 0; }
.sum-bill__row b { font-weight: 500; white-space: nowrap; }
.sum-bill__empty { margin: 0; font-size: .85rem; opacity: .75; }
.sum-bill__total { margin-top: 6px; padding-top: 10px; border-top: 1px dashed rgba(248, 244, 236, .25); }
.sum-bill__now { font-size: 1rem; }
.sum-bill__now b { font: 600 1.45rem/1 var(--font-serif); color: var(--gold-300); }
.sum-bill__now b.is-bump { animation: jjBump .5s var(--ease); }
@keyframes jjBump { 40% { transform: scale(1.12); } }
.sum-bill__later { margin: 6px 0 0; font-size: .8rem; opacity: .8; }

/* ---------- halaman pembayaran ---------- */
.order-success { max-width: 820px; margin: 0 auto; text-align: left; }
.order-success.is-enter > * { animation: jjPageOpen .6s var(--ease) both; }
.order-success.is-enter > *:nth-child(2) { animation-delay: .1s; } .order-success.is-enter > *:nth-child(3) { animation-delay: .15s; }
.order-success.is-enter > *:nth-child(4) { animation-delay: .2s; } .order-success.is-enter > *:nth-child(5) { animation-delay: .25s; }
.pay-hero { text-align: center; margin-bottom: 26px; }
.pay-hero h2 { margin: 6px 0 10px; font-size: clamp(2rem, 4vw, 2.8rem); }
.pay-hero p { max-width: 560px; margin: 0 auto; color: var(--text-secondary); }
.pay-env { position: relative; width: 120px; height: 80px; margin: 0 auto 18px; perspective: 600px; }
.pay-env::before { content: ""; position: absolute; inset: 0; border-radius: 10px; background: var(--gold-200); box-shadow: 0 14px 28px rgba(41, 42, 38, .18); }
.pay-env__card { position: absolute; left: 8px; right: 8px; top: 6px; height: 64px; border-radius: 6px; background: var(--white-warm); border: 1px solid var(--gold-300); display: grid; place-items: center; font: italic 500 .8rem var(--font-serif); color: var(--olive-800); transform: translateY(-34px); transition: transform .6s var(--ease) .2s; z-index: 1; }
.pay-env__flap { position: absolute; inset: 0 0 auto 0; height: 58%; border-radius: 10px 10px 0 0; background: var(--gold-400); clip-path: polygon(0 0, 100% 0, 50% 100%); transform-origin: 50% 0; transform: rotateX(180deg); transition: transform .5s var(--ease) .6s, z-index 0s .8s; z-index: 0; }
.pay-env::after { content: ""; position: absolute; inset: 0; border-radius: 10px; background: linear-gradient(180deg, var(--gold-100), var(--gold-200)); clip-path: polygon(0 0, 50% 55%, 100% 0, 100% 100%, 0 100%); z-index: 2; }
.pay-env__seal { position: absolute; left: 50%; top: 58%; width: 34px; height: 34px; margin: -17px 0 0 -17px; border-radius: 50%; display: grid; place-items: center; background: radial-gradient(circle at 35% 30%, var(--olive-600), var(--olive-800)); color: var(--gold-200); z-index: 4; transform: scale(0); transition: transform .45s cubic-bezier(.3, 1.6, .5, 1) 1.05s; box-shadow: 0 4px 10px rgba(0, 0, 0, .25); }
.pay-env__seal svg { width: 14px; height: 18px; }
.order-success.is-enter .pay-env__card { transform: translateY(0); }
.order-success.is-enter .pay-env__flap { transform: rotateX(0); z-index: 3; }
.order-success.is-enter .pay-env__seal { transform: scale(1); }

.pay-amount {
  display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 20px 24px; border-radius: var(--radius-lg);
  background: radial-gradient(120% 140% at 100% 0%, var(--olive-700), var(--olive-900)); color: var(--neutral-50); box-shadow: var(--shadow);
}
.pay-amount > div > span { display: block; font: 500 .78rem var(--font-sans); letter-spacing: .16em; text-transform: uppercase; color: var(--gold-300); }
.pay-amount > div > b { display: block; font: 600 clamp(2rem, 5vw, 2.6rem)/1.1 var(--font-serif); font-variant-numeric: lining-nums; }
.pay-amount > div > small { display: block; font-size: .84rem; color: var(--olive-200); }
.pay-copy {
  display: inline-flex; align-items: center; gap: 8px; padding: 10px 16px; border-radius: 999px; cursor: pointer; text-decoration: none; white-space: nowrap;
  border: 1px solid var(--gold-300); background: var(--white-warm); color: var(--olive-800); font: 500 .88rem var(--font-sans);
  transition: transform .2s var(--ease), background-color .2s var(--ease);
}
.pay-copy svg { width: 16px; height: 16px; }
.pay-copy:hover { transform: translateY(-2px); }
.pay-copy.is-copied { background: var(--olive-700); color: var(--neutral-50); border-color: var(--olive-700); animation: jjBump .4s var(--ease); }
.pay-title { margin: 28px 0 12px; font: 600 1.35rem var(--font-serif); text-align: center; }
.pay-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; }
.pay-grid.is-shake, .pay-opt.is-shake { animation: jjShake .45s; }
@keyframes jjShake { 20%, 60% { transform: translateX(-6px); } 40%, 80% { transform: translateX(6px); } }
.pay-opt {
  position: relative; display: flex; flex-direction: column; align-items: center; gap: 8px; padding: 18px 10px 14px; border-radius: var(--radius);
  border: 1px solid var(--border); background: var(--bg-surface); cursor: pointer; font: inherit; color: inherit;
  transition: transform .3s var(--ease), box-shadow .3s var(--ease), border-color .3s var(--ease);
  animation: jjPageOpen .5s var(--ease) both; animation-delay: calc(var(--i) * 60ms);
}
.pay-opt:hover:not(.is-soon) { transform: translateY(-4px); box-shadow: var(--shadow); border-color: var(--gold-300); }
.pay-opt.is-on { border-color: var(--olive-700); box-shadow: 0 0 0 2px var(--olive-700), var(--shadow); transform: translateY(-4px); }
.pay-opt.is-on::after {
  content: ""; position: absolute; top: -9px; right: -9px; width: 24px; height: 24px; border-radius: 50%;
  background: var(--olive-700) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23F8F4EC' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M5 12l5 5 9-10'/%3E%3C/svg%3E") center / 13px no-repeat;
  animation: jjBump .4s var(--ease);
}
.pay-opt.is-soon { opacity: .6; cursor: not-allowed; }
.pay-opt__type { font-size: .76rem; color: var(--text-muted); text-align: center; line-height: 1.3; }
.pay-opt__soon { position: absolute; top: 8px; left: 50%; transform: translateX(-50%) rotate(-3deg); padding: 2px 8px; border-radius: 999px; background: var(--gold-200); color: var(--gold-800); font-size: .66rem; font-weight: 500; white-space: nowrap; }
.pay-logo {
  display: inline-grid; place-items: center; min-width: 96px; height: 40px; padding: 0 12px; border-radius: 10px;
  background: var(--pay); color: var(--pay-ink); font: 700 .95rem/1 var(--font-sans); letter-spacing: .02em; position: relative; overflow: hidden;
}
.pay-logo img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: contain; background: #fff; padding: 6px; }
.pay-detail { margin-top: 16px; padding: 20px; border-radius: var(--radius-lg); background: var(--bg-surface); border: 1px solid var(--gold-300); box-shadow: var(--shadow-sm); }
.pay-detail.is-in { animation: jjUnfold .55s var(--ease) both; transform-origin: 50% 0; }
@keyframes jjUnfold { from { opacity: 0; transform: perspective(900px) rotateX(-14deg) translateY(-6px); } to { opacity: 1; transform: none; } }
.pay-acc { display: flex; align-items: center; gap: 18px; flex-wrap: wrap; }
.pay-acc__no { flex: 1; min-width: 180px; }
.pay-acc__no small { display: block; font-size: .78rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .12em; }
.pay-acc__no b { display: block; font: 600 1.9rem/1.15 var(--font-serif); letter-spacing: .03em; font-variant-numeric: lining-nums tabular-nums; }
.pay-acc__no span { font-size: .9rem; color: var(--text-secondary); }
.pay-tip { margin: 12px 0 0; font-size: .88rem; color: var(--text-muted); }
.pay-qr { display: grid; grid-template-columns: 200px 1fr; gap: 20px; align-items: center; }
.pay-qr__img { padding: 0; border: 1px solid var(--border); border-radius: 14px; overflow: hidden; background: #fff; cursor: zoom-in; }
.pay-qr__img img { display: block; width: 100%; height: auto; }
.pay-qr__info p { margin: 6px 0 12px; font-size: .92rem; color: var(--text-secondary); }
.pay-qr__btns { display: flex; flex-wrap: wrap; gap: 8px; }
.pay-zoom { position: fixed; inset: 0; z-index: 400; display: grid; place-items: center; padding: 16px; background: rgba(29, 31, 27, .7); animation: jjPageOpen .25s var(--ease); }
.pay-zoom.is-out { opacity: 0; transition: opacity .2s; }
.pay-zoom__card { width: min(420px, 100%); max-height: 92vh; overflow: auto; padding: 16px; border-radius: 20px; background: var(--white-warm); text-align: center; }
.pay-zoom__card img { width: 100%; height: auto; border-radius: 12px; }
.pay-zoom__card p { margin: 10px 0 12px; font-size: .92rem; }
.pay-sender { margin: 18px 0 0; }
.pay-actions { display: grid; grid-template-columns: 1.4fr 1fr; gap: 12px; margin-top: 18px; }
.js-pay-done[aria-disabled="true"] { opacity: .55; }
.pay-safe { display: flex; gap: 10px; align-items: flex-start; margin: 16px 0 0; padding: 12px 14px; border-radius: 12px; background: var(--olive-50); font-size: .86rem; color: var(--text-secondary); }
.pay-safe svg { width: 20px; height: 20px; flex: none; color: var(--olive-700); }
.pay-home { display: block; margin-top: 18px; text-align: center; font-size: .9rem; }
/* segel terkirim: amplop menutup + cap lilin + kelopak, lalu WhatsApp terbuka */
.order-success.is-sealed .pay-actions .js-pay-done { pointer-events: none; }
.order-success.is-sealed::after {
  content: "Terima kasih \2014 membuka WhatsApp admin…"; position: fixed; left: 50%; bottom: 32px; transform: translateX(-50%); z-index: 410;
  padding: 12px 20px; border-radius: 999px; background: var(--olive-900); color: var(--neutral-50); font: 500 .92rem var(--font-sans); box-shadow: var(--shadow-lg);
  animation: jjPageOpen .4s var(--ease) both;
}
.order-success.is-sealed .pay-env { animation: jjSealPop 1.1s var(--ease) both; }
@keyframes jjSealPop { 0% { transform: none; } 30% { transform: scale(1.18) rotate(-4deg); } 60% { transform: scale(.96) rotate(2deg); } 100% { transform: translateY(-6px); } }
.order-success.is-sealed .pay-env__seal { animation: jjStamp .7s cubic-bezier(.3, 1.6, .5, 1) .2s both; }
@keyframes jjStamp { 0% { transform: scale(2.4); opacity: 0; } 100% { transform: scale(1); opacity: 1; } }
.order-success.is-sealed .pay-hero::before {
  content: ""; position: fixed; inset: 0; pointer-events: none; z-index: 405;
  background:
    radial-gradient(6px 6px at 20% 30%, var(--gold-300) 60%, transparent 62%),
    radial-gradient(5px 5px at 70% 20%, var(--rose-300) 60%, transparent 62%),
    radial-gradient(7px 7px at 40% 60%, var(--gold-400) 60%, transparent 62%),
    radial-gradient(5px 5px at 85% 55%, var(--olive-300) 60%, transparent 62%),
    radial-gradient(6px 6px at 10% 75%, var(--rose-300) 60%, transparent 62%),
    radial-gradient(5px 5px at 55% 85%, var(--gold-300) 60%, transparent 62%);
  animation: jjConfetti 1.3s ease-out both;
}
@keyframes jjConfetti { from { opacity: 0; transform: translateY(-40px); } 30% { opacity: 1; } to { opacity: 0; transform: translateY(60px); } }

@media (max-width: 960px) {
  .choice-grid--cat { grid-template-columns: repeat(3, 1fr); }
  .pay-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 640px) {
  .choice-grid--cat { grid-template-columns: repeat(2, 1fr); }
  .couple-grid, .addon-grid, .pay-actions { grid-template-columns: 1fr; }
  .pay-grid { grid-template-columns: repeat(2, 1fr); }
  .pay-amount { flex-direction: column; align-items: flex-start; }
  .pay-qr { grid-template-columns: 1fr; justify-items: center; text-align: center; }
  .pay-qr__img { width: 220px; }
  .pay-qr__btns { justify-content: center; }
  .pay-acc__no b { font-size: 1.6rem; }
}
@media (prefers-reduced-motion: reduce) {
  .order-success.is-sealed .pay-hero::before { display: none; }
}

/* ===== v9 · Kartu tema: latar sesuai warna tema + tebaran kelopak ===== */
.theme-card {
  --tc: #59664A; --tc2: #C6A66B;
  position: relative;
  background: linear-gradient(172deg, color-mix(in srgb, var(--tc) 30%, #FFFDF9) 0%, color-mix(in srgb, var(--tc) 9%, #FFFDF9) 58%, #FFFDF9 100%);
  border-color: color-mix(in srgb, var(--tc) 32%, #E7E1D6);
}
.theme-card__img { position: relative; background: var(--tc); }
.theme-card__body { position: relative; }
.theme-card__body::before {
  content: ""; position: absolute; left: 18px; right: 18px; top: 0; height: 2px;
  background: linear-gradient(90deg, transparent, var(--tc2), transparent); opacity: .75;
}
.theme-card:hover, .theme-card.is-walk {
  box-shadow: 0 24px 46px -24px color-mix(in srgb, var(--tc) 80%, transparent), var(--shadow);
}
/* "Berjalan pelan menuju pelaminan": gambar maju perlahan */
.theme-card__img img { transition: transform 1.8s cubic-bezier(.22,.61,.36,1); }
.theme-card:hover .theme-card__img img,
.theme-card.is-walk .theme-card__img img { transform: scale(1.07) translateY(-1.5%); }

.jj-petals { position: absolute; inset: 0; z-index: 2; pointer-events: none; overflow: hidden; border-radius: inherit; }
.jj-petal {
  position: absolute; top: -20px; left: var(--x);
  width: var(--s); height: calc(var(--s) * 1.35);
  border-radius: 100% 0 100% 0;
  background: radial-gradient(circle at 30% 28%, rgba(255,255,255,.6), rgba(255,255,255,0) 62%), var(--c);
  box-shadow: 0 1px 2px rgba(41,42,38,.14);
  opacity: 0; will-change: transform, opacity;
  animation: jjTabur var(--d) cubic-bezier(.33,.08,.45,1) var(--dl) forwards;
}
@keyframes jjTabur {
  0%   { opacity: 0;   transform: translate3d(0, 0, 0) rotate(var(--r0)) rotateX(0deg); }
  10%  { opacity: .95; }
  38%  { transform: translate3d(var(--dx1), calc(var(--fall) * .36), 0) rotate(calc(var(--r0) + 110deg)) rotateX(55deg); }
  70%  { opacity: .9;  transform: translate3d(var(--dx2), calc(var(--fall) * .7), 0) rotate(calc(var(--r0) + 220deg)) rotateX(0deg); }
  100% { opacity: 0;   transform: translate3d(var(--dx3), var(--fall), 0) rotate(calc(var(--r0) + 320deg)) rotateX(48deg); }
}
@media (prefers-reduced-motion: reduce) {
  .jj-petals { display: none; }
  .theme-card__img img { transition: none; }
  .theme-card:hover .theme-card__img img, .theme-card.is-walk .theme-card__img img { transform: none; }
}

/* ===== v10 · Urutan nama mempelai ===== */
.couple-order {
  display: flex; flex-wrap: wrap; align-items: center; gap: 6px 10px; margin: 10px 0 0;
  padding: 10px 14px; border-radius: 12px; background: var(--gold-50); border: 1px dashed var(--gold-300);
  font-size: .9rem; color: var(--olive-800);
}
.couple-order b { font: italic 600 1.12rem/1.2 var(--font-serif); color: var(--olive-800); }
.couple-order .amp { color: var(--gold-600, #9C7F45); font-style: italic; }
.couple-card { position: relative; }
.couple-card h4 { display: flex; align-items: center; gap: 10px; }
.couple-card__no {
  display: inline-grid; place-items: center; width: 26px; height: 26px; border-radius: 50%;
  background: var(--olive-700); color: var(--neutral-50); font: 600 .8rem/1 var(--font-sans);
}
.couple-card.is-first { border-color: var(--gold-300); box-shadow: 0 0 0 3px rgba(198,166,107,.18); }
.couple-card.is-swapping { transition: transform .55s cubic-bezier(.22,.61,.36,1); }

/* ===== v10 · Daun bertebaran di landing page ===== */
.jj-daun { position: fixed; inset: 0; z-index: 40; pointer-events: none; overflow: hidden; }
.jj-daun > i {
  position: absolute; top: 0; left: var(--x); opacity: 0;
  animation: jjDaunJatuh var(--d) linear forwards;
  will-change: transform, opacity;
}
.jj-daun > i > b {
  display: block; width: var(--w); height: calc(var(--w) * 1.55);
  animation: jjDaunBalik var(--f) ease-in-out infinite alternate;
}
/* daun: bentuk lewat mask SVG supaya ada urat tengah */
.jj-daun > i.is-daun > b {
  background: linear-gradient(135deg, rgba(255,255,255,.28), rgba(255,255,255,0) 55%), var(--c);
  -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 31'%3E%3Cpath fill-rule='evenodd' d='M10 0C17 6 19.5 15 10 31C.5 15 3 6 10 0ZM9.55 4.5L10.45 4.5L10.45 27L9.55 27Z'/%3E%3C/svg%3E") center / 100% 100% no-repeat;
          mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 31'%3E%3Cpath fill-rule='evenodd' d='M10 0C17 6 19.5 15 10 31C.5 15 3 6 10 0ZM9.55 4.5L10.45 4.5L10.45 27L9.55 27Z'/%3E%3C/svg%3E") center / 100% 100% no-repeat;
}
/* kelopak */
.jj-daun > i.is-kelopak > b {
  height: calc(var(--w) * 1.2); border-radius: 100% 0 100% 0;
  background: radial-gradient(circle at 30% 28%, rgba(255,255,255,.6), rgba(255,255,255,0) 62%), var(--c);
}
@keyframes jjDaunJatuh {
  0%   { opacity: 0; transform: translate3d(0, -8vh, 0) rotate(var(--r0)); }
  8%   { opacity: var(--o); }
  25%  { transform: translate3d(var(--s1), 20vh, 0) rotate(calc(var(--r0) + 60deg)); }
  50%  { transform: translate3d(var(--s2), 48vh, 0) rotate(calc(var(--r0) + 140deg)); }
  75%  { transform: translate3d(var(--s3), 76vh, 0) rotate(calc(var(--r0) + 210deg)); }
  92%  { opacity: var(--o); }
  100% { opacity: 0; transform: translate3d(var(--s4), 106vh, 0) rotate(calc(var(--r0) + 280deg)); }
}
@keyframes jjDaunBalik { from { transform: rotateY(0deg) rotateX(0deg); } to { transform: rotateY(68deg) rotateX(18deg); } }
@media (prefers-reduced-motion: reduce) { .jj-daun { display: none; } .couple-card.is-swapping { transition: none; } }
@media print { .jj-daun { display: none; } }
</style>
</head>
<body>
<!-- ============================== INTRO AMPLOP (v7) ==============================
     Tampil di kunjungan pertama, lalu tampil lagi bila pengunjung tidak membuka web lebih dari
     JEDA_HARI hari (default 7). Disimpan di localStorage: "jj_intro_v1" (sudah membuka amplop) dan
     "jj_kunjungan_terakhir" (waktu kunjungan terakhir). Bisa dilewati (tombol / Esc),
     tidak tampil bila pengunjung memilih "kurangi animasi", membuka #order / #katalog-tema langsung, atau browser otomatis.
     Paksa tampil untuk uji: tambahkan ?intro=1 di URL. -->
<div class="jj-intro" id="jj-intro" role="dialog" aria-modal="true" aria-label="Pembuka undangan JANJIARA" hidden>
  <div class="jj-intro__sparks" aria-hidden="true"></div>
  <button class="jj-intro__skip" type="button" data-intro="skip">Lewati</button>
  <div class="jj-intro__stage">
    <p class="jj-intro__to">Kepada Yth. Bapak/Ibu/Saudara/i</p>
    <p class="jj-intro__title">Anda menerima sebuah undangan</p>
    <div class="jj-env" aria-hidden="true">
      <div class="jj-env__back"></div>
      <div class="jj-env__card">
        <svg viewBox="-15.84 -15.84 823.83 241.69" style="--jj-logo-accent:#C6A66B"><use href="#jj-logo-h"/></svg>
        <p>Setiap Janji, Punya Cerita.</p>
        <small>Resmi dibuka · 21.10.2026</small>
      </div>
      <div class="jj-env__front"></div>
      <div class="jj-env__flap"></div>
      <span class="jj-env__seal"><svg viewBox="-131.91 -269.91 263.82 328.23" style="--jj-logo-accent:#D7C3A0"><use href="#jj-mono"/></svg></span>
    </div>
    <button class="btn jj-intro__open" type="button" data-intro="open">Buka Undangan</button>
  </div>
</div>
<script>
(function () {
  var JEDA_HARI = 7;   /* tampilkan lagi bila lebih dari 7 hari tidak membuka web */
  var el = document.getElementById("jj-intro"), seen = false, force = /[?&]intro=1/.test(location.search);
  var KEY = "jj_kunjungan_terakhir", now = Date.now();
  try {
    seen = localStorage.getItem("jj_intro_v1") === "1";
    var last = +localStorage.getItem(KEY) || 0;
    if (seen && last && now - last > JEDA_HARI * 864e5) { seen = false; localStorage.removeItem("jj_intro_v1"); }
    localStorage.setItem(KEY, String(now));
  } catch (e) {}
  /* catat waktu terakhir halaman dibuka/ditinggalkan, supaya "lama tidak berkunjung" dihitung dari kunjungan terakhir */
  var catat = function () { try { localStorage.setItem(KEY, String(Date.now())); } catch (e) {} };
  window.addEventListener("pagehide", catat);
  document.addEventListener("visibilitychange", function () { if (document.hidden) catat(); });
  var reduce = window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches;
  var deep = /^#(order|katalog-tema)/.test(location.hash || "");
  if (reduce || (!force && (seen || deep || navigator.webdriver))) return;
  el.hidden = false;
  document.documentElement.classList.add("jj-intro-active");
})();
</script>
<!-- Logo JANJIARA (path, tanpa ketergantungan font) + ikon -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><symbol id="jj-logo-h" viewBox="-15.84 -15.84 823.83 241.69"><g transform="translate(83.57,0)"><g transform="translate(0.000,175.398) scale(0.665395022845229)"><path d="M-124.00,0.00 L-124.00,-138.00 A124.00,124.00 0 0 1 124.00,-138.00 L124.00,0.00" fill="none" stroke="var(--jj-logo-accent, #C6A66B)" stroke-width="3.2" stroke-linecap="round"/><g transform="translate(-102.72,0.00)"><path d="M82.818 -55.854 85.386 -60.562H143.594L145.09199999999998 -55.854ZM193.45600000000002 -2.568Q194.526 -2.568 194.526 -1.284Q194.526 0.0 193.45600000000002 0.0Q187.25 0.0 180.72299999999998 -0.428Q174.19599999999997 -0.856 167.99 -0.856Q161.142 -0.856 156.113 -0.428Q151.084 0.0 144.878 0.0Q144.022 0.0 144.022 -1.284Q144.022 -2.568 144.878 -2.568Q155.36399999999998 -2.568 157.718 -5.885Q160.072 -9.202 155.36399999999998 -19.046L109.354 -114.704L116.202 -124.976L74.472 -28.248Q68.908 -15.193999999999999 73.83 -8.881Q78.752 -2.568 92.234 -2.568Q93.304 -2.568 93.304 -1.284Q93.304 0.0 92.234 0.0Q85.814 0.0 80.464 -0.428Q75.114 -0.856 66.982 -0.856Q59.06399999999999 -0.856 54.248999999999995 -0.428Q49.434 0.0 42.586 0.0Q41.73 0.0 41.73 -1.284Q41.73 -2.568 42.586 -2.568Q48.364 -2.568 52.644 -4.815Q56.924 -7.062 60.882999999999996 -13.054Q64.842 -19.046 69.55 -30.174L115.13199999999999 -135.248Q115.34599999999999 -135.89 116.63 -135.99699999999999Q117.914 -136.10399999999998 118.128 -135.248L169.488 -29.317999999999998Q174.62399999999997 -18.832 178.36899999999997 -12.947000000000001Q182.11399999999998 -7.062 185.75199999999998 -4.815Q189.39 -2.568 193.45600000000002 -2.568Z" fill="currentColor"/><path d="M82.39 -133.75Q83.032 -133.75 83.032 -132.466Q83.032 -131.182 82.39 -131.182Q76.184 -131.182 72.97399999999999 -129.898Q69.764 -128.614 68.69399999999999 -125.404Q67.624 -122.194 67.624 -115.988V4.28Q67.624 25.894 57.352 38.948Q47.08 52.002 27.392 52.002Q19.901999999999997 52.002 15.407999999999998 49.22Q10.913999999999998 46.438 10.913999999999998 41.73Q10.913999999999998 38.306 12.947 35.845Q14.979999999999999 33.384 19.259999999999998 33.384Q23.54 33.384 25.787 35.524Q28.034 37.664 29.531999999999996 40.553Q31.029999999999998 43.442 32.635 45.582Q34.239999999999995 47.722 37.236 47.722Q43.656 47.722 47.08 39.483000000000004Q50.504 31.244 50.504 12.198V-116.416Q50.504 -122.622 49.006 -125.725Q47.507999999999996 -128.828 43.227999999999994 -130.005Q38.94799999999999 -131.182 30.387999999999998 -131.182Q29.96 -131.182 29.96 -132.466Q29.96 -133.75 30.387999999999998 -133.75Q36.808 -133.75 43.977000000000004 -133.429Q51.146 -133.108 58.849999999999994 -133.108Q65.912 -133.108 71.797 -133.429Q77.68199999999999 -133.75 82.39 -133.75Z" fill="currentColor"/></g></g></g><path transform="translate(228.05,175.40)" d="M28.5 -62.5Q28.8 -62.5 28.8 -61.900000000000006Q28.8 -61.300000000000004 28.5 -61.300000000000004Q25.6 -61.300000000000004 24.1 -60.7Q22.6 -60.1 22.1 -58.6Q21.6 -57.1 21.6 -54.2V2.0Q21.6 12.100000000000001 16.8 18.200000000000003Q12.0 24.3 2.8000000000000003 24.3Q-0.7000000000000001 24.3 -2.8000000000000003 23.0Q-4.9 21.700000000000003 -4.9 19.5Q-4.9 17.900000000000002 -3.95 16.75Q-3.0 15.600000000000001 -1.0 15.600000000000001Q1.0 15.600000000000001 2.05 16.6Q3.1 17.6 3.8 18.950000000000003Q4.5 20.3 5.25 21.3Q6.0 22.3 7.4 22.3Q10.4 22.3 12.0 18.450000000000003Q13.600000000000001 14.600000000000001 13.600000000000001 5.7V-54.400000000000006Q13.600000000000001 -57.300000000000004 12.900000000000002 -58.75Q12.200000000000001 -60.2 10.200000000000001 -60.75Q8.200000000000001 -61.300000000000004 4.2 -61.300000000000004Q4.0 -61.300000000000004 4.0 -61.900000000000006Q4.0 -62.5 4.2 -62.5Q7.2 -62.5 10.55 -62.35Q13.9 -62.2 17.5 -62.2Q20.8 -62.2 23.55 -62.35Q26.3 -62.5 28.5 -62.5ZM67.4 -26.1 68.60000000000001 -28.3H95.80000000000001L96.5 -26.1ZM119.10000000000001 -1.2000000000000002Q119.60000000000001 -1.2000000000000002 119.60000000000001 -0.6000000000000001Q119.60000000000001 0.0 119.10000000000001 0.0Q116.2 0.0 113.15 -0.2Q110.10000000000001 -0.4 107.2 -0.4Q104.0 -0.4 101.65 -0.2Q99.30000000000001 0.0 96.4 0.0Q96.0 0.0 96.0 -0.6000000000000001Q96.0 -1.2000000000000002 96.4 -1.2000000000000002Q101.30000000000001 -1.2000000000000002 102.4 -2.75Q103.5 -4.3 101.30000000000001 -8.9L79.80000000000001 -53.6L83.0 -58.400000000000006L63.5 -13.200000000000001Q60.900000000000006 -7.1000000000000005 63.2 -4.15Q65.5 -1.2000000000000002 71.80000000000001 -1.2000000000000002Q72.30000000000001 -1.2000000000000002 72.30000000000001 -0.6000000000000001Q72.30000000000001 0.0 71.80000000000001 0.0Q68.80000000000001 0.0 66.30000000000001 -0.2Q63.800000000000004 -0.4 60.0 -0.4Q56.300000000000004 -0.4 54.050000000000004 -0.2Q51.800000000000004 0.0 48.6 0.0Q48.2 0.0 48.2 -0.6000000000000001Q48.2 -1.2000000000000002 48.6 -1.2000000000000002Q51.300000000000004 -1.2000000000000002 53.300000000000004 -2.25Q55.300000000000004 -3.3000000000000003 57.150000000000006 -6.1000000000000005Q59.0 -8.9 61.2 -14.100000000000001L82.5 -63.2Q82.6 -63.5 83.2 -63.55Q83.80000000000001 -63.6 83.9 -63.2L107.9 -13.700000000000001Q110.30000000000001 -8.8 112.05000000000001 -6.050000000000001Q113.80000000000001 -3.3000000000000003 115.5 -2.25Q117.2 -1.2000000000000002 119.10000000000001 -1.2000000000000002ZM147.5 -11.4V-60.2L150.10000000000002 -60.0V-11.4Q150.10000000000002 -6.2 152.0 -3.7Q153.9 -1.2000000000000002 158.0 -1.2000000000000002Q158.20000000000002 -1.2000000000000002 158.20000000000002 -0.6000000000000001Q158.20000000000002 0.0 158.0 0.0Q155.9 0.0 153.75 -0.1Q151.60000000000002 -0.2 148.9 -0.2Q146.3 -0.2 143.8 -0.1Q141.3 0.0 139.10000000000002 0.0Q138.9 0.0 138.9 -0.6000000000000001Q138.9 -1.2000000000000002 139.10000000000002 -1.2000000000000002Q143.5 -1.2000000000000002 145.5 -3.7Q147.5 -6.2 147.5 -11.4ZM198.10000000000002 1.3Q198.10000000000002 1.5 197.65000000000003 1.55Q197.20000000000002 1.6 197.0 1.5L149.9 -54.300000000000004Q146.4 -58.400000000000006 143.85000000000002 -59.85000000000001Q141.3 -61.300000000000004 138.8 -61.300000000000004Q138.60000000000002 -61.300000000000004 138.60000000000002 -61.900000000000006Q138.60000000000002 -62.5 138.8 -62.5Q140.70000000000002 -62.5 142.60000000000002 -62.400000000000006Q144.5 -62.300000000000004 146.10000000000002 -62.300000000000004Q148.5 -62.300000000000004 150.5 -62.400000000000006Q152.5 -62.5 153.5 -62.5Q154.8 -62.5 155.4 -61.35Q156.0 -60.2 158.3 -57.300000000000004L197.3 -10.3ZM198.10000000000002 -51.0V1.3L195.60000000000002 -1.8V-51.0Q195.60000000000002 -56.2 193.75 -58.75Q191.9 -61.300000000000004 187.8 -61.300000000000004Q187.60000000000002 -61.300000000000004 187.60000000000002 -61.900000000000006Q187.60000000000002 -62.5 187.8 -62.5Q189.9 -62.5 192.10000000000002 -62.35Q194.3 -62.2 196.9 -62.2Q199.40000000000003 -62.2 201.8 -62.35Q204.20000000000002 -62.5 206.3 -62.5Q206.5 -62.5 206.5 -61.900000000000006Q206.5 -61.300000000000004 206.3 -61.300000000000004Q202.10000000000002 -61.300000000000004 200.10000000000002 -58.75Q198.10000000000002 -56.2 198.10000000000002 -51.0ZM252.8 -62.5Q253.10000000000002 -62.5 253.10000000000002 -61.900000000000006Q253.10000000000002 -61.300000000000004 252.8 -61.300000000000004Q249.9 -61.300000000000004 248.4 -60.7Q246.9 -60.1 246.4 -58.6Q245.9 -57.1 245.9 -54.2V2.0Q245.9 12.100000000000001 241.10000000000002 18.200000000000003Q236.3 24.3 227.10000000000002 24.3Q223.60000000000002 24.3 221.5 23.0Q219.4 21.700000000000003 219.4 19.5Q219.4 17.900000000000002 220.35000000000002 16.75Q221.3 15.600000000000001 223.3 15.600000000000001Q225.3 15.600000000000001 226.35000000000002 16.6Q227.4 17.6 228.10000000000002 18.950000000000003Q228.8 20.3 229.55 21.3Q230.3 22.3 231.70000000000002 22.3Q234.70000000000002 22.3 236.3 18.450000000000003Q237.9 14.600000000000001 237.9 5.7V-54.400000000000006Q237.9 -57.300000000000004 237.2 -58.75Q236.5 -60.2 234.5 -60.75Q232.5 -61.300000000000004 228.5 -61.300000000000004Q228.3 -61.300000000000004 228.3 -61.900000000000006Q228.3 -62.5 228.5 -62.5Q231.5 -62.5 234.85000000000002 -62.35Q238.20000000000002 -62.2 241.8 -62.2Q245.10000000000002 -62.2 247.85000000000002 -62.35Q250.60000000000002 -62.5 252.8 -62.5ZM293.8 -8.1Q293.8 -5.2 294.35 -3.7Q294.9 -2.2 296.65 -1.7000000000000002Q298.4 -1.2000000000000002 301.9 -1.2000000000000002Q302.1 -1.2000000000000002 302.1 -0.6000000000000001Q302.1 0.0 301.9 0.0Q299.4 0.0 296.35 -0.1Q293.3 -0.2 289.7 -0.2Q286.2 -0.2 283.1 -0.1Q280.0 0.0 277.5 0.0Q277.3 0.0 277.3 -0.6000000000000001Q277.3 -1.2000000000000002 277.5 -1.2000000000000002Q281.0 -1.2000000000000002 282.8 -1.7000000000000002Q284.6 -2.2 285.20000000000005 -3.7Q285.8 -5.2 285.8 -8.1V-54.400000000000006Q285.8 -57.300000000000004 285.20000000000005 -58.75Q284.6 -60.2 282.8 -60.75Q281.0 -61.300000000000004 277.5 -61.300000000000004Q277.3 -61.300000000000004 277.3 -61.900000000000006Q277.3 -62.5 277.5 -62.5Q280.0 -62.5 283.1 -62.35Q286.2 -62.2 289.7 -62.2Q293.3 -62.2 296.4 -62.35Q299.5 -62.5 301.9 -62.5Q302.1 -62.5 302.1 -61.900000000000006Q302.1 -61.300000000000004 301.9 -61.300000000000004Q298.4 -61.300000000000004 296.7 -60.7Q295.0 -60.1 294.4 -58.6Q293.8 -57.1 293.8 -54.2ZM341.2 -26.1 342.4 -28.3H369.6L370.3 -26.1ZM392.9 -1.2000000000000002Q393.4 -1.2000000000000002 393.4 -0.6000000000000001Q393.4 0.0 392.9 0.0Q390.0 0.0 386.95 -0.2Q383.9 -0.4 381.0 -0.4Q377.8 -0.4 375.45000000000005 -0.2Q373.1 0.0 370.2 0.0Q369.8 0.0 369.8 -0.6000000000000001Q369.8 -1.2000000000000002 370.2 -1.2000000000000002Q375.1 -1.2000000000000002 376.20000000000005 -2.75Q377.3 -4.3 375.1 -8.9L353.6 -53.6L356.8 -58.400000000000006L337.3 -13.200000000000001Q334.7 -7.1000000000000005 337.0 -4.15Q339.3 -1.2000000000000002 345.6 -1.2000000000000002Q346.1 -1.2000000000000002 346.1 -0.6000000000000001Q346.1 0.0 345.6 0.0Q342.6 0.0 340.1 -0.2Q337.6 -0.4 333.8 -0.4Q330.1 -0.4 327.85 -0.2Q325.6 0.0 322.4 0.0Q322.0 0.0 322.0 -0.6000000000000001Q322.0 -1.2000000000000002 322.4 -1.2000000000000002Q325.1 -1.2000000000000002 327.1 -2.25Q329.1 -3.3000000000000003 330.95000000000005 -6.1000000000000005Q332.8 -8.9 335.0 -14.100000000000001L356.3 -63.2Q356.4 -63.5 357.0 -63.55Q357.6 -63.6 357.7 -63.2L381.7 -13.700000000000001Q384.1 -8.8 385.85 -6.050000000000001Q387.6 -3.3000000000000003 389.3 -2.25Q391.0 -1.2000000000000002 392.9 -1.2000000000000002ZM463.70000000000005 0.0Q462.1 0.0 458.45000000000005 -3.85Q454.8 -7.7 449.70000000000005 -14.85Q444.6 -22.0 438.20000000000005 -31.900000000000002L444.90000000000003 -34.0Q453.3 -21.900000000000002 459.15 -14.700000000000001Q465.0 -7.5 469.5 -4.35Q474.0 -1.2000000000000002 478.1 -1.2000000000000002Q478.40000000000003 -1.2000000000000002 478.40000000000003 -0.6000000000000001Q478.40000000000003 0.0 478.1 0.0Q472.5 0.0 468.95000000000005 0.0Q465.40000000000003 0.0 463.70000000000005 0.0ZM439.70000000000005 -62.800000000000004Q448.1 -62.800000000000004 452.55 -59.25Q457.0 -55.7 457.0 -49.800000000000004Q457.0 -44.2 453.8 -39.8Q450.6 -35.4 445.45000000000005 -32.9Q440.3 -30.400000000000002 434.40000000000003 -30.400000000000002Q433.20000000000005 -30.400000000000002 431.90000000000003 -30.450000000000003Q430.6 -30.5 429.5 -30.6V-8.1Q429.5 -5.2 430.05 -3.7Q430.6 -2.2 432.35 -1.7000000000000002Q434.1 -1.2000000000000002 437.6 -1.2000000000000002Q437.90000000000003 -1.2000000000000002 437.90000000000003 -0.6000000000000001Q437.90000000000003 0.0 437.6 0.0Q435.1 0.0 432.1 -0.1Q429.1 -0.2 425.5 -0.2Q422.1 -0.2 419.0 -0.1Q415.90000000000003 0.0 413.40000000000003 0.0Q413.1 0.0 413.1 -0.6000000000000001Q413.1 -1.2000000000000002 413.40000000000003 -1.2000000000000002Q416.8 -1.2000000000000002 418.55 -1.7000000000000002Q420.3 -2.2 420.95000000000005 -3.7Q421.6 -5.2 421.6 -8.1V-54.400000000000006Q421.6 -57.300000000000004 421.0 -58.75Q420.40000000000003 -60.2 418.70000000000005 -60.75Q417.0 -61.300000000000004 413.5 -61.300000000000004Q413.3 -61.300000000000004 413.3 -61.900000000000006Q413.3 -62.5 413.5 -62.5Q416.0 -62.5 419.05 -62.35Q422.1 -62.2 425.5 -62.2Q428.70000000000005 -62.2 432.70000000000005 -62.5Q436.70000000000005 -62.800000000000004 439.70000000000005 -62.800000000000004ZM448.8 -46.6Q448.8 -52.2 447.3 -55.35Q445.8 -58.5 443.05 -59.8Q440.3 -61.1 436.6 -61.1Q432.8 -61.1 431.15 -59.75Q429.5 -58.400000000000006 429.5 -54.2V-33.1Q430.90000000000003 -33.0 432.55000000000007 -32.900000000000006Q434.20000000000005 -32.800000000000004 435.40000000000003 -32.800000000000004Q442.8 -32.800000000000004 445.8 -36.2Q448.8 -39.6 448.8 -46.6ZM511.90000000000003 -26.1 513.1 -28.3H540.3000000000001L541.0 -26.1ZM563.6 -1.2000000000000002Q564.1 -1.2000000000000002 564.1 -0.6000000000000001Q564.1 0.0 563.6 0.0Q560.7 0.0 557.6500000000001 -0.2Q554.6 -0.4 551.7 -0.4Q548.5 -0.4 546.1500000000001 -0.2Q543.8000000000001 0.0 540.9000000000001 0.0Q540.5 0.0 540.5 -0.6000000000000001Q540.5 -1.2000000000000002 540.9000000000001 -1.2000000000000002Q545.8000000000001 -1.2000000000000002 546.9000000000001 -2.75Q548.0 -4.3 545.8000000000001 -8.9L524.3000000000001 -53.6L527.5 -58.400000000000006L508.00000000000006 -13.200000000000001Q505.40000000000003 -7.1000000000000005 507.70000000000005 -4.15Q510.00000000000006 -1.2000000000000002 516.3000000000001 -1.2000000000000002Q516.8000000000001 -1.2000000000000002 516.8000000000001 -0.6000000000000001Q516.8000000000001 0.0 516.3000000000001 0.0Q513.3000000000001 0.0 510.80000000000007 -0.2Q508.30000000000007 -0.4 504.50000000000006 -0.4Q500.80000000000007 -0.4 498.55000000000007 -0.2Q496.30000000000007 0.0 493.1 0.0Q492.70000000000005 0.0 492.70000000000005 -0.6000000000000001Q492.70000000000005 -1.2000000000000002 493.1 -1.2000000000000002Q495.80000000000007 -1.2000000000000002 497.80000000000007 -2.25Q499.80000000000007 -3.3000000000000003 501.6500000000001 -6.1000000000000005Q503.50000000000006 -8.9 505.70000000000005 -14.100000000000001L527.0 -63.2Q527.1 -63.5 527.7 -63.55Q528.3000000000001 -63.6 528.4000000000001 -63.2L552.4000000000001 -13.700000000000001Q554.8000000000001 -8.8 556.5500000000001 -6.050000000000001Q558.3000000000001 -3.3000000000000003 560.0 -2.25Q561.7 -1.2000000000000002 563.6 -1.2000000000000002Z" fill="currentColor"/></symbol></svg>
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <symbol id="i-rings" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="14.5" r="5"/><circle cx="15" cy="14.5" r="5"/><path d="M10 5.5l2-2.2 2 2.2-2 2z"/></symbol>
    <symbol id="i-cake" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 21h17M5 21v-7a2 2 0 012-2h10a2 2 0 012 2v7"/><path d="M5 16.2c2.3 1.4 4.7 1.4 7 0s4.7-1.4 7 0M8 12V9.2M12 12V9.2M16 12V9.2"/><path d="M8 4.5c.8.9.8 2 0 2.5-.8-.5-.8-1.6 0-2.5zM12 4.5c.8.9.8 2 0 2.5-.8-.5-.8-1.6 0-2.5zM16 4.5c.8.9.8 2 0 2.5-.8-.5-.8-1.6 0-2.5z"/></symbol>
    <symbol id="i-shield" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7.5 3v5.2c0 4.6-3.1 8.1-7.5 9.8-4.4-1.7-7.5-5.2-7.5-9.8V6z"/><path d="M12 8.2l1.2 2.4 2.6.4-1.9 1.8.5 2.6-2.4-1.3-2.4 1.3.5-2.6-1.9-1.8 2.6-.4z"/></symbol>
    <symbol id="i-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M19.5 14.8A8 8 0 019.2 4.5a8 8 0 1010.3 10.3z"/><path d="M17 3.5l.7 1.6 1.6.7-1.6.7L17 8.1l-.7-1.6-1.6-.7 1.6-.7z"/></symbol>
    <symbol id="i-heart" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7.5-4.5-7.5-10.2A4.2 4.2 0 0112 7.3a4.2 4.2 0 017.5 2.5C19.5 15.5 12 20 12 20z"/></symbol>
    <symbol id="i-flower" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="2.4"/><circle cx="12" cy="6" r="3"/><circle cx="18" cy="12" r="3"/><circle cx="12" cy="18" r="3"/><circle cx="6" cy="12" r="3"/></symbol>
    <symbol id="i-home" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 11L12 4l8.5 7"/><path d="M5.5 9.5V20h13V9.5M10 20v-5.5h4V20"/></symbol>
    <symbol id="i-cap" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11v5c3.5 2.2 8.5 2.2 12 0v-5M22 9v6"/></symbol>
    <symbol id="i-book" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6.5C10 5 7 4.5 3.5 5v13.5C7 18 10 18.5 12 20c2-1.5 5-2 8.5-1.5V5C17 4.5 14 5 12 6.5zM12 6.5V20"/></symbol>
    <symbol id="i-users" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0113 0"/><path d="M15.5 4.6a3.5 3.5 0 010 6.8M18 14.2a6.2 6.2 0 013.5 5.8"/></symbol>
    <symbol id="i-store" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1.6-5h14.8L21 9H3zM3 9a3 3 0 006 0 3 3 0 006 0 3 3 0 006 0"/><path d="M5 12.5V21h14v-8.5M10 21v-5h4v5"/></symbol>
    <symbol id="i-hands" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.6 4.6L18 9.2l-4.4 1.6L12 15.4l-1.6-4.6L6 9.2l4.4-1.6z"/><path d="M18.5 15l.7 1.8 1.8.7-1.8.7-.7 1.8-.7-1.8-1.8-.7 1.8-.7zM5.5 15.5l.5 1.3 1.3.5-1.3.5-.5 1.3-.5-1.3-1.3-.5 1.3-.5z"/></symbol>
    <symbol id="i-candle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21h6V10H9zM12 10V7.5"/><path d="M12 2.5c1.2 1.4 1.2 3 0 3.8-1.2-.8-1.2-2.4 0-3.8z"/><path d="M6 21h12"/></symbol>
    <symbol id="i-rsvp" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l2.7 2.7L16 9.6"/></symbol>
    <symbol id="i-chat" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16v11H9l-5 4z"/><path d="M8 9h8M8 12.2h5"/></symbol>
    <symbol id="i-gift" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="4.5" rx="1"/><path d="M5 12.5V21h14v-8.5M12 8v13M12 8C10.5 4.5 7.5 3.8 7 5.6 6.6 7.2 9 8 12 8zm0 0c1.5-3.5 4.5-4.2 5-2.4.4 1.6-2 2.4-5 2.4z"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.2 2"/></symbol>
    <symbol id="i-map" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-6.1-7-11.4a7 7 0 0114 0C19 14.9 12 21 12 21z"/><circle cx="12" cy="9.6" r="2.5"/></symbol>
    <symbol id="i-image" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9.5" r="1.8"/><path d="M21 15.5l-5-5L6.5 20"/></symbol>
    <symbol id="i-music" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5.5l11-2v12.5"/><circle cx="6" cy="18" r="3"/><circle cx="17" cy="16" r="3"/></symbol>
    <symbol id="i-play-fill" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.2v13.6c0 .8.9 1.3 1.6.9l10.8-6.8a1 1 0 0 0 0-1.8L9.6 4.3A1 1 0 0 0 8 5.2z"/></symbol>
    <symbol id="i-film" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2.5"/><path d="M7 4v16M17 4v16M3 12h18M3 8h4M3 16h4M17 8h4M17 16h4"/></symbol>
    <symbol id="i-phone" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="2.5" width="12" height="19" rx="2.5"/><path d="M10.5 5.5h3"/></symbol>
    <symbol id="i-user" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0116 0"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></symbol>
    <symbol id="i-x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M7 7l10 10M17 7L7 17"/></symbol>
    <symbol id="i-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></symbol>
    <symbol id="i-star" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1-4.4-4.3 6.1-.9z"/></symbol>
    <symbol id="i-message" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3.5a8.5 8.5 0 00-7.4 12.7L3.5 20.5l4.4-1.1A8.5 8.5 0 1012 3.5z"/><path d="M8.5 10.5h7M8.5 13.5h4.5"/></symbol>
    <symbol id="i-camera" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3.5" y="3.5" width="17" height="17" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17 7h.01"/></symbol>
    <symbol id="i-mail" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3.5 6.5l8.5 6 8.5-6"/></symbol>
  </defs>
</svg>

<!-- ===== BANNER ILUSTRASI PAKET (siap dipanggil) =====
     Cara memakai di bagian mana pun halaman ini:
       <svg class="jj-banner" viewBox="0 0 360 150" aria-hidden="true"><use href="#jj-banner-janji"/></svg>
       <svg class="jj-banner" viewBox="0 0 360 150" aria-hidden="true"><use href="#jj-banner-cerita"/></svg>
       <svg class="jj-banner" viewBox="0 0 360 150" aria-hidden="true"><use href="#jj-banner-purnama"/></svg>
     Kelas tambahan (opsional):
       jj-banner--rounded  -> sudut membulat sesuai radius kartu
       jj-banner--shadow   -> bayangan lembut
     Contoh: <svg class="jj-banner jj-banner--rounded jj-banner--shadow" viewBox="0 0 360 150" aria-hidden="true"><use href="#jj-banner-cerita"/></svg>
     Lebar mengikuti elemen induk; tinggi menyesuaikan otomatis (rasio 360:150). -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <symbol id="jj-banner-janji" viewBox="0 0 360 150"><title>Ilustrasi Paket Janji</title><rect width="360" height="150" fill="#F8F4EC"/><path d="M0,128 L360,128" stroke="#D7C3A0" stroke-width="1"/><path d="M86,64 q-4,18 3,34 q6,14 -1,26" fill="none" stroke="#6B785D" stroke-width=".8"/><ellipse cx="86" cy="50" rx="12.32" ry="14" fill="#D8B8B2"/><path d="M84,64 l2,3 l2,-3 z" fill="#D8B8B2"/><ellipse cx="81.1" cy="44.4" rx="2.52" ry="4.2" fill="#FFFDF9" opacity=".6"/><path d="M110,48 q-4,18 3,34 q6,14 -1,26" fill="none" stroke="#6B785D" stroke-width=".8"/><ellipse cx="110" cy="36" rx="10.56" ry="12" fill="#D7C3A0"/><path d="M108,48 l2,3 l2,-3 z" fill="#D7C3A0"/><ellipse cx="105.8" cy="31.2" rx="2.16" ry="3.5999999999999996" fill="#FFFDF9" opacity=".6"/><path d="M64,76 q-4,18 3,34 q6,14 -1,26" fill="none" stroke="#6B785D" stroke-width=".8"/><ellipse cx="64" cy="66" rx="8.8" ry="10" fill="#D9DFD3"/><path d="M62,76 l2,3 l2,-3 z" fill="#D9DFD3"/><ellipse cx="60.5" cy="62.0" rx="1.7999999999999998" ry="3.0" fill="#FFFDF9" opacity=".6"/><path d="M138.0,128 L138.0,58.0 A42.0,42.0 0 0 1 222.0,58.0 L222.0,128" fill="#FFFDF9" stroke="#C6A66B" stroke-width="1.6"/><path d="M145.0,128 L145.0,65.0 A35.0,35.0 0 0 1 215.0,65.0 L215.0,128" fill="none" stroke="#D9DFD3" stroke-width=".9"/><rect x="160" y="66" width="40" height="50" rx="3" fill="#F8F4EC" stroke="#D7C3A0" stroke-width=".9"/><path d="M160,69 L180,86 L200,69" fill="none" stroke="#D7C3A0" stroke-width=".9"/><path d="M180,83 L185,88 L180,93 L175,88 Z" fill="#C6A66B"/><path d="M168,100 h24 M171,106 h18" stroke="#6B785D" stroke-width="1.4" stroke-linecap="round"/><rect x="246" y="100" width="54" height="28" rx="4" fill="#F4EAE9" stroke="#D8B8B2" stroke-width="1"/><rect x="256" y="80" width="34" height="20" rx="3" fill="#F8F4EC" stroke="#D7C3A0" stroke-width="1"/><path d="M246,110 q6.75,6 13.5,0 t13.5,0 t13.5,0 t13.5,0" fill="none" stroke="#D8B8B2" stroke-width="1"/><rect x="262.5" y="68" width="3" height="12" rx="1" fill="#D9DFD3"/><path d="M264,60 q3,4 0,7 q-3,-3 0,-7z" fill="#C6A66B"/><rect x="271.5" y="68" width="3" height="12" rx="1" fill="#D9DFD3"/><path d="M273,60 q3,4 0,7 q-3,-3 0,-7z" fill="#C6A66B"/><rect x="280.5" y="68" width="3" height="12" rx="1" fill="#D9DFD3"/><path d="M282,60 q3,4 0,7 q-3,-3 0,-7z" fill="#C6A66B"/><path d="M22.0,128.0 L28.0,117.6 L34.0,107.2 L40.0,96.8 L46.0,86.4 L52.0,76.0" fill="none" stroke="#6B785D" stroke-width="1.2" stroke-linecap="round"/><path d="M28.0,117.6 Q34.0,121.1 39.4,116.6 Q33.3,113.1 28.0,117.6 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M34.0,107.2 Q35.3,100.6 29.4,97.4 Q28.1,104.0 34.0,107.2 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M40.0,96.8 Q45.4,100.4 50.2,95.9 Q44.7,92.4 40.0,96.8 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M46.0,86.4 Q47.6,80.4 41.9,77.7 Q40.3,83.8 46.0,86.4 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M52.0,76.0 Q56.8,79.6 61.0,75.3 Q56.1,71.7 52.0,76.0 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M336.0,128.0 L330.0,117.6 L324.0,107.2 L318.0,96.8 L312.0,86.4 L306.0,76.0" fill="none" stroke="#6B785D" stroke-width="1.2" stroke-linecap="round"/><path d="M330.0,117.6 Q336.0,114.1 334.8,107.3 Q328.8,110.8 330.0,117.6 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M324.0,107.2 Q319.0,102.8 313.2,106.3 Q318.3,110.7 324.0,107.2 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M318.0,96.8 Q323.8,93.9 322.3,87.6 Q316.5,90.5 318.0,96.8 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M312.0,86.4 Q307.6,82.0 302.4,85.6 Q306.9,90.0 312.0,86.4 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M306.0,76.0 Q311.5,73.7 309.8,67.9 Q304.3,70.3 306.0,76.0 Z" fill="none" stroke="#6B785D" stroke-width="1.1"/><path d="M138,27 L141,30 L138,33 L135,30 Z" fill="#C6A66B"/><path d="M230,37.5 L232.5,40 L230,42.5 L227.5,40 Z" fill="#D8B8B2"/><path d="M318,49 L321,52 L318,55 L315,52 Z" fill="#C6A66B"/><path d="M40,21.5 L42.5,24 L40,26.5 L37.5,24 Z" fill="#D7C3A0"/><path d="M224,18 L226,20 L224,22 L222,20 Z" fill="#6B785D"/><path d="M300,23.5 L302.5,26 L300,28.5 L297.5,26 Z" fill="#D8B8B2"/></symbol>
    <symbol id="jj-banner-cerita" viewBox="0 0 360 150"><title>Ilustrasi Paket Cerita</title><rect width="360" height="150" fill="#424A38"/><g transform="rotate(-12 78 78)"><rect x="52" y="44" width="52" height="66" rx="3" fill="#FFFDF9"/><rect x="57" y="49" width="42" height="42" fill="#D8B8B2"/><path d="M57,91 l13,-16 l9,10 l7,-7 l13,13 z" fill="#6B785D" opacity=".55"/><circle cx="88" cy="59" r="5" fill="#F3ECE0"/><path d="M62,100 h22" stroke="#D7C3A0" stroke-width="1.4" stroke-linecap="round"/></g><g transform="rotate(-3 114 86)"><rect x="88" y="52" width="52" height="66" rx="3" fill="#FFFDF9"/><rect x="93" y="57" width="42" height="42" fill="#D9DFD3"/><path d="M93,99 l13,-16 l9,10 l7,-7 l13,13 z" fill="#6B785D" opacity=".55"/><circle cx="124" cy="67" r="5" fill="#F3ECE0"/><path d="M98,108 h22" stroke="#D7C3A0" stroke-width="1.4" stroke-linecap="round"/></g><rect x="150" y="14" width="64" height="124" rx="12" fill="#292A26"/><rect x="155" y="20" width="54" height="112" rx="8" fill="#F8F4EC"/><rect x="172" y="23" width="20" height="4" rx="2" fill="#292A26"/><path d="M165.0,84 L165.0,53.0 A17.0,17.0 0 0 1 199.0,53.0 L199.0,84" fill="#FFFDF9" stroke="#C6A66B" stroke-width="1.1"/><path d="M172,62 h20 M175,69 h14" stroke="#59664A" stroke-width="1.6" stroke-linecap="round"/><path d="M182,73.5 L184.5,76 L182,78.5 L179.5,76 Z" fill="#C6A66B"/><path d="M167,94 h30 M172,100 h20" stroke="#D9DFD3" stroke-width="1.4" stroke-linecap="round"/><rect x="166" y="110" width="32" height="9" rx="4.5" fill="#59664A"/><g fill="#C6A66B" stroke="#C6A66B"><path d="M240,40 v26" stroke-width="1.6"/><path d="M262,34 v26" stroke-width="1.6"/><path d="M240,40 L262,34 L262,40 L240,46 Z" stroke="none"/><ellipse cx="236" cy="67" rx="5" ry="3.8" transform="rotate(-20 236 67)" stroke="none"/><ellipse cx="258" cy="61" rx="5" ry="3.8" transform="rotate(-20 258 61)" stroke="none"/></g><g fill="#D7C3A0" stroke="#D7C3A0"><path d="M292,58 v20" stroke-width="1.4"/><path d="M292,58 q8,3 9,10" fill="none" stroke-width="1.4"/><ellipse cx="288" cy="79" rx="4.2" ry="3.2" transform="rotate(-20 288 79)" stroke="none"/></g><rect x="246" y="92" width="64" height="40" rx="4" fill="#F8F4EC"/><path d="M246,96 L278,116 L310,96" fill="none" stroke="#D7C3A0" stroke-width="1.2"/><circle cx="278" cy="114" r="6" fill="#D8B8B2"/><path d="M278,111.4 L280.6,114 L278,116.6 L275.4,114 Z" fill="#FFFDF9"/><path d="M34,21 Q34.9,25.1 39,26 Q34.9,26.9 34,31 Q33.1,26.9 29,26 Q33.1,25.1 34,21 Z" fill="#D7C3A0"/><path d="M128,14 Q128.72,17.28 132,18 Q128.72,18.72 128,22 Q127.28,18.72 124,18 Q127.28,17.28 128,14 Z" fill="#F8F4EC"/><path d="M226,13.5 Q226.81,17.19 230.5,18 Q226.81,18.81 226,22.5 Q225.19,18.81 221.5,18 Q225.19,17.19 226,13.5 Z" fill="#D7C3A0"/><path d="M328,25 Q328.9,29.1 333,30 Q328.9,30.9 328,35 Q327.1,30.9 323,30 Q327.1,29.1 328,25 Z" fill="#D7C3A0"/><path d="M330,114 Q330.72,117.28 334,118 Q330.72,118.72 330,122 Q329.28,118.72 326,118 Q329.28,117.28 330,114 Z" fill="#F8F4EC"/><path d="M120,126.5 Q120.63,129.37 123.5,130 Q120.63,130.63 120,133.5 Q119.37,130.63 116.5,130 Q119.37,129.37 120,126.5 Z" fill="#F8F4EC"/></symbol>
    <symbol id="jj-banner-purnama" viewBox="0 0 360 150"><title>Ilustrasi Paket Purnama</title><rect width="360" height="150" fill="#2F3429"/><path d="M0,10 L360,10" stroke="#C6A66B" stroke-width=".6" opacity=".7"/><path d="M12,6.8 L15.2,10 L12,13.2 L8.8,10 Z" fill="#C6A66B"/><path d="M36,6.8 L39.2,10 L36,13.2 L32.8,10 Z" fill="#C6A66B"/><path d="M60,6.8 L63.2,10 L60,13.2 L56.8,10 Z" fill="#C6A66B"/><path d="M84,6.8 L87.2,10 L84,13.2 L80.8,10 Z" fill="#C6A66B"/><path d="M108,6.8 L111.2,10 L108,13.2 L104.8,10 Z" fill="#C6A66B"/><path d="M132,6.8 L135.2,10 L132,13.2 L128.8,10 Z" fill="#C6A66B"/><path d="M156,6.8 L159.2,10 L156,13.2 L152.8,10 Z" fill="#C6A66B"/><path d="M180,6.8 L183.2,10 L180,13.2 L176.8,10 Z" fill="#C6A66B"/><path d="M204,6.8 L207.2,10 L204,13.2 L200.8,10 Z" fill="#C6A66B"/><path d="M228,6.8 L231.2,10 L228,13.2 L224.8,10 Z" fill="#C6A66B"/><path d="M252,6.8 L255.2,10 L252,13.2 L248.8,10 Z" fill="#C6A66B"/><path d="M276,6.8 L279.2,10 L276,13.2 L272.8,10 Z" fill="#C6A66B"/><path d="M300,6.8 L303.2,10 L300,13.2 L296.8,10 Z" fill="#C6A66B"/><path d="M324,6.8 L327.2,10 L324,13.2 L320.8,10 Z" fill="#C6A66B"/><path d="M348,6.8 L351.2,10 L348,13.2 L344.8,10 Z" fill="#C6A66B"/><path d="M0,140 L360,140" stroke="#C6A66B" stroke-width=".6" opacity=".7"/><path d="M12,136.8 L15.2,140 L12,143.2 L8.8,140 Z" fill="#C6A66B"/><path d="M36,136.8 L39.2,140 L36,143.2 L32.8,140 Z" fill="#C6A66B"/><path d="M60,136.8 L63.2,140 L60,143.2 L56.8,140 Z" fill="#C6A66B"/><path d="M84,136.8 L87.2,140 L84,143.2 L80.8,140 Z" fill="#C6A66B"/><path d="M108,136.8 L111.2,140 L108,143.2 L104.8,140 Z" fill="#C6A66B"/><path d="M132,136.8 L135.2,140 L132,143.2 L128.8,140 Z" fill="#C6A66B"/><path d="M156,136.8 L159.2,140 L156,143.2 L152.8,140 Z" fill="#C6A66B"/><path d="M180,136.8 L183.2,140 L180,143.2 L176.8,140 Z" fill="#C6A66B"/><path d="M204,136.8 L207.2,140 L204,143.2 L200.8,140 Z" fill="#C6A66B"/><path d="M228,136.8 L231.2,140 L228,143.2 L224.8,140 Z" fill="#C6A66B"/><path d="M252,136.8 L255.2,140 L252,143.2 L248.8,140 Z" fill="#C6A66B"/><path d="M276,136.8 L279.2,140 L276,143.2 L272.8,140 Z" fill="#C6A66B"/><path d="M300,136.8 L303.2,140 L300,143.2 L296.8,140 Z" fill="#C6A66B"/><path d="M324,136.8 L327.2,140 L324,143.2 L320.8,140 Z" fill="#C6A66B"/><path d="M348,136.8 L351.2,140 L348,143.2 L344.8,140 Z" fill="#C6A66B"/><path d="M35.0,132 L35.0,63.0 A23.0,23.0 0 0 1 81.0,63.0 L81.0,132" fill="#424A38" stroke="#C6A66B" stroke-width="1"/><path d="M41.0,132 L41.0,69.0 A17.0,17.0 0 0 1 75.0,69.0 L75.0,132" fill="none" stroke="#D7C3A0" stroke-width=".6" opacity=".7"/><path d="M279.0,132 L279.0,63.0 A23.0,23.0 0 0 1 325.0,63.0 L325.0,132" fill="#424A38" stroke="#C6A66B" stroke-width="1"/><path d="M285.0,132 L285.0,69.0 A17.0,17.0 0 0 1 319.0,69.0 L319.0,132" fill="none" stroke="#D7C3A0" stroke-width=".6" opacity=".7"/><path d="M95.0,132 L95.0,83.0 A15.0,15.0 0 0 1 125.0,83.0 L125.0,132" fill="#424A38" stroke="#C6A66B" stroke-width=".8" opacity=".85"/><path d="M235.0,132 L235.0,83.0 A15.0,15.0 0 0 1 265.0,83.0 L265.0,132" fill="#424A38" stroke="#C6A66B" stroke-width=".8" opacity=".85"/><path d="M128.0,132 L128.0,66.0 A52.0,52.0 0 0 1 232.0,66.0 L232.0,132" fill="#59664A" stroke="#C6A66B" stroke-width="1.6"/><path d="M136.0,132 L136.0,72.0 A44.0,44.0 0 0 1 224.0,72.0 L224.0,132" fill="none" stroke="#D7C3A0" stroke-width=".8"/><circle cx="180" cy="84" r="20" fill="#F8F4EC"/><circle cx="180" cy="84" r="24" fill="none" stroke="#C6A66B" stroke-width=".8"/><path d="M174,73 L192,84 L174,95 Z" fill="#59664A"/><path d="M160,118 h40 M166,125 h28" stroke="#D7C3A0" stroke-width="1.5" stroke-linecap="round"/><path d="M180,20 Q181.08,24.92 186,26 Q181.08,27.08 180,32 Q178.92,27.08 174,26 Q178.92,24.92 180,20 Z" fill="#C6A66B"/><path d="M134,40 Q134.72,43.28 138,44 Q134.72,44.72 134,48 Q133.28,44.72 130,44 Q133.28,43.28 134,40 Z" fill="#D7C3A0"/><path d="M226,40 Q226.72,43.28 230,44 Q226.72,44.72 226,48 Q225.28,44.72 222,44 Q225.28,43.28 226,40 Z" fill="#D7C3A0"/><path d="M24,32.5 Q24.63,35.37 27.5,36 Q24.63,36.63 24,39.5 Q23.37,36.63 20.5,36 Q23.37,35.37 24,32.5 Z" fill="#D7C3A0"/><path d="M336,32.5 Q336.63,35.37 339.5,36 Q336.63,36.63 336,39.5 Q335.37,36.63 332.5,36 Q335.37,35.37 336,32.5 Z" fill="#D7C3A0"/><path d="M92,27 Q92.54,29.46 95,30 Q92.54,30.54 92,33 Q91.46,30.54 89,30 Q91.46,29.46 92,27 Z" fill="#D7C3A0"/><path d="M268,27 Q268.54,29.46 271,30 Q268.54,30.54 268,33 Q267.46,30.54 265,30 Q267.46,29.46 268,27 Z" fill="#D7C3A0"/></symbol>
  </defs>
</svg>

<a class="skip-link" href="#utama">Lewati ke konten utama</a>

<!-- ============================== HEADER ============================== -->
<header class="site-header" id="top">
  <div class="container nav">
    <a class="brand" href="#top" aria-label="JANJIARA — beranda">
      <svg viewBox="-15.84 -15.84 823.83 241.69" role="img" aria-hidden="true"><use href="#jj-logo-h"/></svg>
    </a>
    <!-- Menu navbar. Semua menu tetap di landing page ini (#tema, #harga, #katalog-video, …) supaya pengunjung
         tidak dilempar ke halaman bawaan platform. Hanya "Portal Customer" (→ /portal/login)
         yang mengarah ke platform undangan JANJIARA (https://janjiaraundangan.webinvit.id).
         target="_top" WAJIB ada: /portal/login mengirim X-Frame-Options: SAMEORIGIN, jadi bila
         halaman ini dipasang di dalam iframe, tanpa _top link portal akan diblokir dan terlihat
         tidak terbuka. Di luar iframe, _top berperilaku sama seperti klik biasa. -->
    <nav aria-label="Navigasi utama">
      <div class="nav__menu" id="menu">
        <a href="#tema">Tema</a>
        <a href="#harga">Harga</a>
        <a href="#katalog-video">Video</a>
        <a href="#faq">FAQ</a>
        <a href="#sk">S&amp;K</a>
        <a href="#kontak">Kontak</a>
        <div class="nav__mobile-actions">
          <a class="btn btn--outline btn--block js-site" data-path="/portal/login" href="https://janjiaraundangan.webinvit.id/portal/login" target="_top"><svg aria-hidden="true"><use href="#i-user"/></svg>Portal Customer</a>
          <a class="btn btn--primary btn--block" href="#order">Form Order</a>
        </div>
      </div>
    </nav>
    <div class="nav__actions">
      <a class="btn btn--outline btn--sm js-site" data-path="/portal/login" href="https://janjiaraundangan.webinvit.id/portal/login" title="Portal Customer" target="_top"><svg aria-hidden="true"><use href="#i-user"/></svg>Portal Customer</a>
      <a class="btn btn--primary btn--sm" href="#order">Form Order</a>
    </div>
    <button class="nav__toggle" type="button" aria-controls="menu" aria-expanded="false" aria-label="Buka menu"><span></span></button>
  </div>
</header>

<main id="utama">

<!-- ============================== HERO ============================== -->
<section class="hero">
  <div class="hero__petals" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
  <div class="container hero__grid">
    <div class="hero__copy reveal">
      <a class="hero__promo" href="#promo-opening" data-promo="badge"><span class="hero__promo-dot" aria-hidden="true"></span><span data-promo="badge-text">Resmi buka · Harga opening mulai Rp49rb</span></a>
      <span class="eyebrow">Undangan Digital untuk Setiap Momen</span>
      <h1>Setiap Janji, <span class="accent">Punya Cerita.</span></h1>
      <p class="hero__lead">Undangan digital yang elegan, personal, dan praktis untuk pernikahan, ulang tahun si kecil, khitanan, aqiqah &amp; tasmiyah, hingga syukuran keluarga. Cukup bagikan satu tautan, tamu langsung bisa konfirmasi kehadiran.</p>
      <div class="hero__events" aria-label="Jenis acara">
        <span class="chip">Pernikahan</span><span class="chip">Ulang Tahun Anak</span><span class="chip">Khitanan</span><span class="chip">Aqiqah &amp; Tasmiyah</span><span class="chip">Syukuran</span>
      </div>
      <div class="hero__actions">
        <a class="btn btn--primary" href="#tema">Lihat Katalog Tema <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
        <a class="btn btn--outline" data-wa="Saya ingin konsultasi undangan digital." href="#kontak">Konsultasi Gratis</a>
      </div>
      <div class="hero__trust">
        <div class="trust-item"><strong>1×24 jam</strong><span>Undangan siap dibagikan</span></div>
        <div class="trust-item"><strong>15+</strong><span>Jenis acara</span></div>
        <div class="trust-item"><strong>Tanpa batas</strong><span>Kirim ke semua tamu</span></div>
      </div>
    </div>

    <div class="hero__visual reveal" aria-label="Contoh tampilan undangan digital">
      <div class="phone">
        <div class="phone__screen" id="hero-invite" aria-live="polite">
          <div class="invite__arch">
            <span class="invite__label" data-f="label">The Wedding of</span>
            <span class="invite__names" data-f="name1">Rania</span>
            <span class="invite__amp" data-f="amp">&amp;</span>
            <span class="invite__names" data-f="name2">Dimas</span>
          </div>
          <p class="invite__date" data-f="date">Sabtu, 12 Desember 2026</p>
          <p class="invite__place" data-f="place">Gedung Serbaguna Melati, Jakarta</p>
          <div class="countdown" aria-hidden="true">
            <div><b data-cd="d">00</b><small>HARI</small></div>
            <div><b data-cd="h">00</b><small>JAM</small></div>
            <div><b data-cd="m">00</b><small>MENIT</small></div>
          </div>
          <span class="invite__btn">Konfirmasi Kehadiran</span>
        </div>
      </div>
      <div class="float-card float-card--rsvp"><span class="ico"><svg aria-hidden="true"><use href="#i-rsvp"/></svg></span><span><b>RSVP masuk</b>Keluarga Bp. Hasan · 4 orang</span></div>
      <div class="float-card float-card--gift"><span class="ico"><svg aria-hidden="true"><use href="#i-gift"/></svg></span><span><b>Amplop digital</b>Hadiah diterima</span></div>
    </div>
  </div>
</section>


<!-- ============================== PROMO OPENING (v7) ============================== -->
<section class="promo-opening" id="promo-opening" aria-labelledby="promo-title" data-promo="section">
  <svg class="promo-opening__arch" viewBox="0 0 600 700" aria-hidden="true" focusable="false"><path d="M40 700V300a260 260 0 0 1 520 0v400"/><path d="M80 700V310a220 220 0 0 1 440 0v390"/></svg>
  <div class="container promo-opening__grid">
    <div class="promo-opening__copy reveal">
      <span class="promo-eyebrow" data-promo="eyebrow">Harga Opening · 21 Okt – 4 Nov 2026</span>
      <h2 id="promo-title">Undangan digital cantik, <span class="accent">mulai Rp49rb.</span></h2>
      <p class="promo-opening__lead">Hemat Rp10.000 untuk semua paket, khusus <b>10 pelanggan pertama</b> atau sampai <b>4 November 2026</b>, mana yang lebih dulu.</p>
      <ul class="promo-prices">
        <li><span>Janji</span><b>Rp49rb</b><s>Rp59rb</s></li>
        <li class="is-hero"><span>Cerita</span><b>Rp69rb</b><s>Rp79rb</s></li>
        <li><span>Purnama</span><b>Rp99rb</b><s>Rp109rb</s></li>
      </ul>
      <div class="promo-opening__actions">
        <a class="btn btn--gold" href="#harga">Ambil Harga Opening <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
        <a class="btn btn--ghost-light" href="#sk">Lihat S&amp;K</a>
      </div>
    </div>
    <div class="promo-opening__timer reveal">
      <div class="promo-env" aria-hidden="true"><span class="promo-env__flap"></span><span class="promo-env__seal"><svg viewBox="-131.91 -269.91 263.82 328.23" style="--jj-logo-accent:#D7C3A0"><use href="#jj-mono"/></svg></span></div>
      <p class="promo-timer__label" data-promo="label">Harga opening berakhir dalam</p>
      <div class="promo-timer" role="timer" aria-live="off">
        <div><b data-pt="d">00</b><small>Hari</small></div>
        <div><b data-pt="h">00</b><small>Jam</small></div>
        <div><b data-pt="m">00</b><small>Menit</small></div>
        <div><b data-pt="s">00</b><small>Detik</small></div>
      </div>
      <p class="promo-timer__note">Kuota dihitung saat pembayaran masuk: Janji lunas, Cerita &amp; Purnama DP 50%.</p>
    </div>
  </div>
</section>

<!-- ============================== ACARA ============================== -->
<section class="section section--surface" id="acara">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Untuk Setiap Momen</span>
      <h2>Satu tempat untuk <span class="accent">semua acara keluarga</span></h2>
      <p>Dari akad hingga syukuran kelahiran, setiap tema dirancang sesuai suasana acaranya — hangat untuk keluarga, rapi untuk tamu.</p>
    </div>

    <div class="events">
      <article class="event-card reveal" data-tone="rose">
        <div class="event-card__icon"><svg aria-hidden="true"><use href="#i-rings"/></svg></div>
        <h3>Pernikahan</h3>
        <p>Akad, pemberkatan, resepsi, hingga ngunduh mantu dalam satu undangan.</p>
        <ul>
          <li>Kisah cinta &amp; galeri prewedding</li>
          <li>Jadwal akad dan resepsi terpisah</li>
          <li>Amplop digital &amp; daftar kado</li>
        </ul>
        <a class="link-arrow" href="#tema" data-filter-link="wedding">Lihat tema <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </article>

      <article class="event-card reveal" data-tone="gold">
        <div class="event-card__icon"><svg aria-hidden="true"><use href="#i-cake"/></svg></div>
        <h3>Ulang Tahun Anak</h3>
        <p>Undangan ceria yang tetap rapi untuk pesta si kecil di rumah, sekolah, atau venue.</p>
        <ul>
          <li>Tema ceria yang tidak berlebihan</li>
          <li>Info dress code &amp; titik kumpul</li>
          <li>RSVP jumlah anak &amp; pendamping</li>
        </ul>
        <a class="link-arrow" href="#tema" data-filter-link="kids">Lihat tema <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </article>

      <article class="event-card reveal" data-tone="sage">
        <div class="event-card__icon"><svg aria-hidden="true"><use href="#i-shield"/></svg></div>
        <h3>Khitanan</h3>
        <p>Tasyakuran khitan dengan nuansa hangat untuk sang jagoan dan keluarga besar.</p>
        <ul>
          <li>Doa &amp; ucapan untuk sang anak</li>
          <li>Jadwal walimah &amp; hiburan</li>
          <li>Peta lokasi rumah / gedung</li>
        </ul>
        <a class="link-arrow" href="#tema" data-filter-link="khitan">Lihat tema <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </article>

      <article class="event-card reveal" data-tone="olive">
        <div class="event-card__icon"><svg aria-hidden="true"><use href="#i-moon"/></svg></div>
        <h3>Aqiqah &amp; Tasmiyah</h3>
        <p>Syukuran kelahiran dan pemberian nama ananda, lengkap dengan makna namanya.</p>
        <ul>
          <li>Nama lengkap &amp; arti nama ananda</li>
          <li>Foto bayi &amp; data kelahiran</li>
          <li>Kutipan doa dan ayat pilihan</li>
        </ul>
        <a class="link-arrow" href="#tema" data-filter-link="aqiqah">Lihat tema <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </article>
    </div>

    <div class="other-events reveal">
      <h3>Dan acara lainnya</h3>
      <p>Momen-momen yang biasa dirayakan keluarga Indonesia — semua bisa kami buatkan.</p>
      <ul class="other-grid">
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-heart"/></svg>Lamaran &amp; Tunangan</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-flower"/></svg>Pengajian &amp; Siraman</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-flower"/></svg>Tujuh Bulanan</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-home"/></svg>Syukuran Rumah Baru</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-cap"/></svg>Syukuran Wisuda</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-book"/></svg>Khataman Al-Qur'an</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-hands"/></svg>Halal Bihalal</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-users"/></svg>Reuni &amp; Arisan</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-rings"/></svg>Ulang Tahun Pernikahan</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-cake"/></svg>Ulang Tahun Dewasa</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-store"/></svg>Peresmian Usaha</li>
        <li class="other-chip"><svg aria-hidden="true"><use href="#i-candle"/></svg>Haul &amp; Tahlilan</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============================== TEMA ============================== -->
<section class="section" id="tema">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Katalog Tema</span>
      <h2>Pilih tema, <span class="accent">kami sesuaikan</span></h2>
      <p>Setiap tema bisa diubah warna, foto, musik, dan susunan kontennya sesuai karakter acara Anda.</p>
    </div>

    <div class="filters" role="group" aria-label="Filter tema">
      <button class="filter-btn" type="button" data-filter="all" aria-pressed="true">Semua</button>
      <button class="filter-btn" type="button" data-filter="wedding" aria-pressed="false">Pernikahan</button>
      <button class="filter-btn" type="button" data-filter="kids" aria-pressed="false">Ulang Tahun Anak</button>
      <button class="filter-btn" type="button" data-filter="khitan" aria-pressed="false">Khitanan</button>
      <button class="filter-btn" type="button" data-filter="aqiqah" aria-pressed="false">Aqiqah &amp; Tasmiyah</button>
      <button class="filter-btn" type="button" data-filter="other" aria-pressed="false">Acara Lainnya</button>
    </div>

    <!-- ================= KATALOG TEMA =================
         CARA MENAMBAH TEMA (pilih salah satu):

         A) Lewat data JavaScript (DISARANKAN)
            Buka bagian <script> di bawah, cari "const THEMES = [", lalu tambahkan satu baris per tema:
              { nama: "Fohoway", kategori: "wedding", gambar: "https://janjiaraundangan.webinvit.id/themes/fohoway/fohoway.webp",
                 preview: "https://janjiaraundangan.webinvit.id/preview/fohoway", deskripsi: "Elegan dengan sentuhan floral", badge: "Terlaris" },
            - kategori : wedding | kids | khitan | aqiqah | other   (sesuai tombol filter di atas)
            - gambar   : URL gambar thumbnail tema (rasio 4:5 atau persegi)
            - preview  : link demo/preview tema di platform
            - badge    : opsional ("Baru", "Terlaris"), boleh dikosongkan
            Begitu THEMES berisi minimal 1 tema, kartu contoh di bawah otomatis diganti kartu tema asli.

         B) Lewat HTML manual — salin blok berikut ke dalam <div class="themes" id="themes"> dan hapus kartu contoh:
            <article class="theme-card" data-cat="wedding">
              <div class="theme-card__img"><img src="URL-GAMBAR-TEMA" alt="Tema NAMA" loading="lazy"></div>
              <div class="theme-card__body">
                <div class="theme-card__top"><h3>NAMA TEMA</h3><span class="tag tag--wedding">Pernikahan</span></div>
                <p>Deskripsi singkat tema.</p>
                <div class="theme-card__actions">
                  <a class="btn btn--outline btn--sm" href="URL-PREVIEW" target="_blank" rel="noopener">Preview</a>
                  <a class="btn btn--primary btn--sm" href="#order?tema=NAMA%20TEMA&amp;kategori=wedding">Pesan</a>
                </div>
              </div>
            </article>
         ================================================== -->
    <div class="themes" id="themes">
      <article class="theme-card reveal" data-cat="wedding">
        <div class="tp tp--sage" aria-hidden="true">
          <span class="tp__arch"></span>
          <span class="tp__label">The Wedding of</span>
          <span class="tp__title">Rania<br>&amp; Dimas</span>
          <span class="tp__sub">12 · 12 · 2026</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Sage Garden</h3><span class="tag tag--wedding">Pernikahan</span></div>
          <p>Minimalis, hijau sage, dan bingkai gerbang yang tenang.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Sage Garden* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a><span class="badge">Terlaris</span></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="wedding">
        <div class="tp tp--floral" aria-hidden="true">
          <span class="tp__frame"></span>
          <span class="tp__leaf" style="top:22px;left:22px"></span>
          <span class="tp__leaf" style="bottom:22px;right:22px;transform:rotate(180deg)"></span>
          <span class="tp__label">Walimatul 'Ursy</span>
          <span class="tp__title" style="font-style:italic">Nadia<br>&amp; Fajar</span>
          <span class="tp__sub">Ahad, 7 Februari 2027</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Floral Romance</h3><span class="tag tag--wedding">Pernikahan</span></div>
          <p>Garis botani halus dengan aksen dusty rose.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Floral Romance* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="wedding">
        <div class="tp tp--classic" aria-hidden="true">
          <span class="tp__frame"></span>
          <span class="tp__arch"></span>
          <span class="tp__label">Resepsi Pernikahan</span>
          <span class="tp__title">Sekar<br>&amp; Bagas</span>
          <span class="tp__sub">Sabtu, 20 Maret 2027</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Kencana Klasik</h3><span class="tag tag--wedding">Pernikahan</span></div>
          <p>Luxury classic gelap dengan detail emas — cocok untuk nuansa adat.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Kencana Klasik* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a><span class="badge">Baru</span></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="kids">
        <div class="tp tp--kids" aria-hidden="true">
          <span class="tp__dot" style="width:46px;height:46px;background:var(--rose-200);top:26px;left:24px"></span>
          <span class="tp__dot" style="width:22px;height:22px;background:var(--gold-300);top:60px;right:40px"></span>
          <span class="tp__dot" style="width:34px;height:34px;background:var(--olive-200);bottom:34px;left:44px"></span>
          <span class="tp__dot" style="width:14px;height:14px;background:var(--gold-400);bottom:60px;right:30px"></span>
          <span class="tp__label">Ulang Tahun ke-5</span>
          <span class="tp__title">Kenzo</span>
          <span class="tp__sub">Sabtu, 9 Januari 2027</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Pesta Ceria</h3><span class="tag tag--kids">Ulang Tahun</span></div>
          <p>Konfeti lembut dan warna hangat — ceria tanpa ramai.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Pesta Ceria* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="kids">
        <div class="tp tp--kids2" aria-hidden="true">
          <span class="tp__frame" style="border-radius:24px"></span>
          <span class="tp__dot" style="width:60px;height:60px;border:1px solid currentColor;opacity:.35;top:30px;right:30px"></span>
          <span class="tp__label">Birthday Party</span>
          <span class="tp__title">Alya<br>turns 7</span>
          <span class="tp__sub">Ahad, 14 Februari 2027</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Langit Biru</h3><span class="tag tag--kids">Ulang Tahun</span></div>
          <p>Biru kalem dengan sentuhan petualangan untuk si kecil.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Langit Biru* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="khitan">
        <div class="tp tp--khitan" aria-hidden="true">
          <span class="tp__arch"></span>
          <span class="tp__label">Tasyakuran Khitan</span>
          <span class="tp__title">Arka<br>Pratama</span>
          <span class="tp__sub">Ahad, 27 Desember 2026</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Jagoan Kecil</h3><span class="tag tag--khitan">Khitanan</span></div>
          <p>Hijau teduh dan emas untuk hari istimewa sang jagoan.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Jagoan Kecil* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="aqiqah">
        <div class="tp tp--aqiqah" aria-hidden="true">
          <span class="tp__frame"></span>
          <span class="tp__arch"></span>
          <span class="tp__label">Aqiqah &amp; Tasmiyah</span>
          <span class="tp__title">Aisyah<br>Humaira</span>
          <span class="tp__sub">Ahad, 20 Desember 2026</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Cahaya Ananda</h3><span class="tag tag--aqiqah">Aqiqah</span></div>
          <p>Ivory lembut dengan ruang untuk arti nama ananda.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Cahaya Ananda* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a><span class="badge">Baru</span></div>
        </div>
      </article>

      <article class="theme-card reveal" data-cat="other">
        <div class="tp tp--grad" aria-hidden="true">
          <span class="tp__frame"></span>
          <span class="tp__label">Syukuran Wisuda</span>
          <span class="tp__title">Nadia<br>Putri, S.Ds.</span>
          <span class="tp__sub">Sabtu, 6 Maret 2027</span>
        </div>
        <div class="theme-card__body">
          <div class="theme-card__top"><h3>Toga Gemilang</h3><span class="tag tag--other">Acara Lain</span></div>
          <p>Elegan dan berwibawa untuk wisuda atau peresmian.</p>
          <div class="theme-card__meta"><a class="link-arrow" data-wa="Saya tertarik dengan tema *Toga Gemilang* 🥰|Boleh minta info paket &amp; harganya?" href="#kontak">Pakai tema ini <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
        </div>
      </article>
    </div>
    <div class="catalog-cta reveal"><a class="btn btn--primary" href="#katalog-tema">Lihat semua tema <span class="catalog-cta__count" data-tema-total></span><svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
  </div>
</section>

<!-- ============================== VIDEO UCAPAN (teaser) ==============================
     Kartu diisi otomatis dari data JJ_VIDEO (lihat script paling bawah). Katalog lengkap: #katalog-video -->
<section class="section" id="video">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Video Ucapan</span>
      <h2>Kirim ucapan yang <span class="accent">tidak hanya dibaca.</span></h2>
      <p>Video pendek berformat vertikal untuk Natal, Tahun Baru, dan momen spesial lainnya. Nama, foto, dan kalimatnya kami sesuaikan dengan Anda — tinggal bagikan ke WhatsApp atau Instagram Story.</p>
    </div>
    <div class="vcat-grid" id="video-teaser"></div>
    <div class="catalog-cta reveal"><a class="btn btn--primary" href="#katalog-video">Lihat semua video ucapan <span class="catalog-cta__count" data-video-total></span><svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
  </div>
</section>

<!-- ============================== FITUR ============================== -->
<section class="section section--subtle" id="fitur">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Fitur Lengkap</span>
      <h2>Semua yang tamu butuhkan, <span class="accent">dalam satu tautan</span></h2>
      <p>Tanpa aplikasi, tanpa cetak. Tamu cukup membuka tautan dari WhatsApp.</p>
    </div>
    <div class="features">
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-user"/></svg></div><h3>Nama tamu personal</h3><p>Setiap tamu menerima tautan dengan namanya sendiri di halaman pembuka.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-rsvp"/></svg></div><h3>RSVP otomatis</h3><p>Konfirmasi kehadiran dan jumlah tamu tercatat rapi untuk tuan rumah.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-chat"/></svg></div><h3>Ucapan &amp; doa</h3><p>Buku tamu digital untuk mengumpulkan doa dan ucapan terbaik.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-gift"/></svg></div><h3>Amplop digital</h3><p>Rekening, e-wallet, atau QRIS untuk tamu yang ingin memberi hadiah.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-map"/></svg></div><h3>Peta lokasi</h3><p>Terhubung ke Google Maps agar tamu tidak tersesat.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-clock"/></svg></div><h3>Hitung mundur</h3><p>Countdown menuju hari H dan tombol simpan ke kalender.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-image"/></svg></div><h3>Galeri &amp; video</h3><p>Foto prewedding, foto ananda, atau video kenangan keluarga.</p></div>
      <div class="feature reveal"><div class="feature__icon"><svg aria-hidden="true"><use href="#i-music"/></svg></div><h3>Musik latar</h3><p>Lagu pilihan Anda mengiringi tamu saat membuka undangan.</p></div>
    </div>
  </div>
</section>

<!-- ============================== CARA PESAN ============================== -->
<section class="section" id="cara-pesan">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Cara Pesan</span>
      <h2>Empat langkah, <span class="accent">undangan siap dibagikan</span></h2>
    </div>
    <ol class="steps">
      <li class="step reveal"><span class="step__num">1</span><h3>Pilih tema &amp; paket</h3><p>Lihat katalog lalu pilih tema dan paket yang sesuai acara Anda.</p></li>
      <li class="step reveal"><span class="step__num">2</span><h3>Kirim data acara</h3><p>Isi Form Order: nama, jadwal, lokasi, musik, dan satu link Google Drive berisi foto serta aset desain.</p></li>
      <li class="step reveal"><span class="step__num">3</span><h3>Cek preview</h3><p>Kami kirim preview undangan untuk dicek dan direvisi bila perlu.</p></li>
      <li class="step reveal"><span class="step__num">4</span><h3>Bagikan ke tamu</h3><p>Terima tautan final dan daftar link per nama tamu untuk dikirim.</p></li>
    </ol>
  </div>
</section>

<!-- ============================== HARGA ============================== -->
<!-- Harga mengikuti dokumen "JANJIARA — Perhitungan HPP, Harga Jual, dan Promo Opening" (Oktober 2026).
     v7 (21 Okt 2026): opening Rp49rb/Rp69rb/Rp99rb, normal Rp59rb/Rp79rb/Rp109rb, untuk 10 pelanggan pertama ATAU
     21 Okt 19.00 – 4 Nov 2026 19.00 WIB (mana yang lebih dulu). Setelah promo berakhir halaman otomatis memakai harga normal
     (JJ_PROMO di script paling bawah). Bila kuota 10 pelanggan habis lebih dulu: set JJ_PROMO.kuotaHabis = true. -->
<section class="section section--surface" id="harga">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Pilihan Paket</span>
      <h2>Harga jelas, <span class="accent">tanpa biaya tersembunyi</span></h2>
      <p>Pilih paket sesuai kebutuhan acara — dari syukuran sederhana hingga pernikahan dengan nuansa adat.</p>
    </div>
    <p class="opening-note reveal"><strong>Harga Opening</strong> untuk 10 pelanggan pertama atau sampai 4 November 2026, mana yang lebih dulu. Setelah itu berlaku harga normal. Promo tidak dapat digabung dengan promo lain. <a href="#sk">Lihat S&amp;K</a></p>
    <div class="pricing">
      <article class="price-card reveal">
        <div class="price-card__banner"><svg class="jj-banner jj-banner--rounded jj-banner--shadow" viewBox="0 0 360 150" aria-hidden="true" focusable="false"><use href="#jj-banner-janji"/></svg></div>
        <h3>Janji</h3>
        <p class="desc">Untuk ulang tahun, syukuran, dan aqiqah sederhana.</p>
        <span class="price-label">Harga Opening</span>
        <div class="price" data-normal="Rp59rb"><strong>Rp49rb</strong><span>/ acara</span></div>
        <p class="price-normal">Harga normal <s>Rp59.000</s> · hemat Rp10.000</p>
        <ul>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Masa aktif undangan 30 hari</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Isi &amp; edit sendiri lewat Portal Pelanggan</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Tema pilihan dari katalog</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Info acara, countdown &amp; peta lokasi</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>RSVP &amp; ucapan tamu</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Musik latar bawaan</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Bebas ubah data selama masa aktif</li>
          <li class="off"><svg aria-hidden="true"><use href="#i-x"/></svg>Galeri foto</li>
          <li class="off"><svg aria-hidden="true"><use href="#i-x"/></svg>Nama tamu personal (tersedia sebagai add-on)</li>
          <li class="off"><svg aria-hidden="true"><use href="#i-x"/></svg>Custom tema (tersedia di Paket Cerita &amp; Purnama)</li>
        </ul>
        <a class="btn btn--outline btn--block" data-wa="Saya mau order *Paket Janji*." href="#kontak">Pilih Paket Janji</a>
        <a class="price-form-link" href="#order?paket=Janji">atau isi Form Order</a>
      </article>

      <article class="price-card price-card--featured reveal">
        <span class="ribbon">Rekomendasi</span>
        <div class="price-card__banner"><svg class="jj-banner jj-banner--rounded jj-banner--shadow" viewBox="0 0 360 150" aria-hidden="true" focusable="false"><use href="#jj-banner-cerita"/></svg></div>
        <h3>Cerita</h3>
        <p class="desc">Untuk pernikahan, khitanan, serta aqiqah &amp; tasmiyah.</p>
        <span class="price-label">Harga Opening</span>
        <div class="price" data-normal="Rp79rb"><strong>Rp69rb</strong><span>/ acara</span></div>
        <p class="price-normal">Harga normal <s>Rp79.000</s> · hemat Rp10.000</p>
        <ul>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Masa aktif undangan 90 hari</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Dibuatkan oleh admin JANJIARA</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Semua fitur dasar Paket Janji</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Musik custom — lagu pilihan Anda</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Galeri foto</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Nama tamu personal tanpa batas</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Amplop digital / QRIS</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Penyesuaian ringan pada tema</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Bisa tambah custom tema (add-on)</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Revisi 3 kali</li>
        </ul>
        <a class="btn btn--light btn--block" data-wa="Saya mau order *Paket Cerita*." href="#kontak">Pilih Paket Cerita</a>
        <a class="price-form-link" href="#order?paket=Cerita">atau isi Form Order</a>
      </article>

      <article class="price-card reveal">
        <div class="price-card__banner"><svg class="jj-banner jj-banner--rounded jj-banner--shadow" viewBox="0 0 360 150" aria-hidden="true" focusable="false"><use href="#jj-banner-purnama"/></svg></div>
        <h3>Purnama</h3>
        <p class="desc">Untuk pernikahan premium dan nuansa adat.</p>
        <span class="price-label">Harga Opening</span>
        <div class="price" data-normal="Rp109rb"><strong>Rp99rb</strong><span>/ acara</span></div>
        <p class="price-normal">Harga normal <s>Rp109.000</s> · hemat Rp10.000</p>
        <ul>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Masa aktif undangan 180 hari</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Dibuatkan oleh admin JANJIARA</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Semua fitur Paket Cerita</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Kustomisasi warna &amp; susunan halaman</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Bisa tambah custom tema (add-on)</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Galeri foto lebih banyak</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Video &amp; tautan live streaming</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Prioritas pengerjaan</li>
          <li><svg aria-hidden="true"><use href="#i-check"/></svg>Revisi konten &amp; warna hingga 5 kali</li>
        </ul>
        <a class="btn btn--outline btn--block" data-wa="Saya mau order *Paket Purnama*." href="#kontak">Pilih Paket Purnama</a>
        <a class="price-form-link" href="#order?paket=Purnama">atau isi Form Order</a>
      </article>
    </div>

    <div class="addons reveal">
      <h3>Tambahan (add-on)</h3>
      <ul>
        <li><span>Musik custom untuk Paket Janji</span><b>Rp15.000</b></li>
        <li><span>Nama tamu personal untuk Paket Janji</span><b>Rp10.000</b></li>
        <li><span>Data Paket Janji diisikan admin</span><b>Rp15.000</b></li>
        <li><span>Revisi tambahan</span><b>Rp10.000 / revisi</b></li>
        <li><span>Pengerjaan kilat (paket)</span><b>Rp15.000</b></li>
        <li><span>Custom domain</span><b>harga domain + jasa</b></li>
        <li><span>Custom tema — sudah punya desain · khusus Cerita &amp; Purnama</span><b>Rp105.000</b></li>
        <li><span>Custom tema — desain dari awal · khusus Cerita &amp; Purnama</span><b>Rp215.000</b></li>
        <li><span>Opsi Private / Express untuk custom tema</span><b>+Rp205.000 / +Rp215.000</b></li>
      </ul>
      <p class="order-hint">Custom tema = desain tema baru di luar katalog. Harganya tetap (tidak ikut harga opening), dibayar penuh di awal terpisah dari DP paket. <a href="#custom-tema">Lihat detail &amp; ketentuan custom tema</a> · <a data-wa="Saya ingin tanya *custom tema* untuk undangan saya." href="#kontak">Tanya admin</a></p>
    </div>
    <p class="pricing-note">Paket Janji dibayar lunas di awal. Paket Cerita &amp; Purnama: DP 50% untuk memulai, pelunasan setelah draft disetujui. Batas revisi berlaku untuk perubahan konten dan warna; pergantian tema atau konsep dikenakan biaya tambahan. Butuh beberapa acara sekaligus (mis. lamaran + pernikahan)? Tanyakan paket bundling via WhatsApp.</p>
  </div>
</section>


<!-- ============================== CUSTOM TEMA (v7) ============================== -->
<section class="section section--subtle" id="custom-tema">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Add-on · Paket Cerita &amp; Purnama</span>
      <h2>Ingin desain yang <span class="accent">benar-benar milikmu?</span></h2>
      <p>Custom tema dibuat khusus dari desain atau konsepmu oleh tim desain mitra kami, didampingi admin JANJIARA dari brief sampai undangan siap dibagikan.</p>
    </div>
    <div class="custom-grid">
      <article class="custom-card reveal">
        <span class="custom-card__tag">Sudah punya desain</span>
        <h3>Rp105.000</h3>
        <p>Desainmu sudah rampung dan sesuai format. Admin memeriksa file lebih dulu sebelum kamu membayar.</p>
      </article>
      <article class="custom-card custom-card--deep reveal">
        <span class="custom-card__tag">Desain dari awal</span>
        <h3>Rp215.000</h3>
        <p>Dibuat dari konsep, warna, dan referensimu. Screenshot undangan lain dihitung sebagai referensi.</p>
      </article>
      <article class="custom-card custom-card--opt reveal">
        <div><span class="custom-card__tag">Opsi Private</span><h3>+Rp205.000</h3><p>Tema hanya dipakai untukmu (1 klien). Tanpa Private, tema custom tidak eksklusif.</p></div>
        <div><span class="custom-card__tag">Opsi Express</span><h3>+Rp215.000</h3><p>Proses lebih cepat. Estimasi waktunya dikonfirmasi admin sebelum pembayaran.</p></div>
      </article>
    </div>
    <ul class="custom-notes reveal">
      <li>Proses reguler ±7 hari sejak brief &amp; pembayaran lengkap</li>
      <li>Revisi desain maksimal 4 kali</li>
      <li>Maksimal 3 font berlisensi komersial (Google Fonts disarankan)</li>
      <li>Dibayar 100% di awal, terpisah dari paket, tidak ikut harga opening</li>
    </ul>
    <div class="custom-cta reveal"><a class="btn btn--primary" data-wa="Saya mau konsultasi *Custom Tema* untuk undangan saya." href="#kontak">Konsultasi Custom Tema</a></div>
  </div>
</section>

<!-- ============================== SYARAT & KETENTUAN (v7) ============================== -->
<section class="section" id="sk">
  <div class="container sk-wrap">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Syarat &amp; Ketentuan</span>
      <h2>Jelas sejak awal, <span class="accent">tenang sampai hari H</span></h2>
      <p>Ringkasan ketentuan pemesanan JANJIARA. Ada yang belum jelas? Tanyakan ke admin sebelum membayar.</p>
    </div>
    <div class="sk-list reveal">
      <details class="sk-item" open>
        <summary><span class="sk-num">01</span>Harga opening</summary>
        <ul>
          <li>Berlaku mulai Rabu, 21 Oktober 2026 pukul 19.00 WIB sampai Rabu, 4 November 2026 pukul 19.00 WIB, atau sampai kuota 10 pelanggan pertama terpenuhi, mana yang lebih dulu.</li>
          <li>Harga opening: Janji Rp49.000, Cerita Rp69.000, Purnama Rp99.000. Setelah promo berakhir berlaku harga normal: Janji Rp59.000, Cerita Rp79.000, Purnama Rp109.000.</li>
          <li>Kuota dihitung saat pembayaran masuk: pelunasan untuk Paket Janji, DP 50% untuk Paket Cerita &amp; Purnama.</li>
          <li>Harga opening hanya untuk harga paket. Add-on dan custom tema memakai harga normal.</li>
          <li>Tidak dapat digabung dengan voucher referral atau promo lain.</li>
        </ul>
      </details>
      <details class="sk-item">
        <summary><span class="sk-num">02</span>Pembayaran &amp; pengerjaan</summary>
        <ul>
          <li>Paket Janji dibayar lunas di awal. Akses Portal Pelanggan dikirim setelah pembayaran diterima; data diisi dan diubah sendiri selama masa aktif.</li>
          <li>Paket Cerita &amp; Purnama: DP 50% untuk memulai pengerjaan. Pelunasan dilakukan setelah draft disetujui, dan tautan final dikirim setelah lunas.</li>
          <li>Draft dikirim dalam bentuk tangkapan layar atau rekaman layar.</li>
          <li>Estimasi pengerjaan dihitung setelah data dan materi lengkap kami terima.</li>
          <li>Pembayaran hanya ke rekening &amp; e-wallet atas nama NURCHOLIS yang tercantum di halaman pembayaran resmi JANJIARA (BCA, Bank Jago, DANA, GoPay, ShopeePay, QRIS). Konfirmasi selalu lewat WhatsApp resmi 0851-2102-4405.</li>
        </ul>
      </details>
      <details class="sk-item">
        <summary><span class="sk-num">03</span>Revisi &amp; masa aktif</summary>
        <ul>
          <li>Paket Cerita: revisi 3 kali. Paket Purnama: revisi konten &amp; warna hingga 5 kali. Revisi tambahan Rp10.000 per revisi.</li>
          <li>Revisi berlaku untuk perubahan konten dan warna. Pergantian tema atau konsep setelah pengerjaan dimulai dikenakan biaya tambahan.</li>
          <li>Masa aktif dihitung sejak undangan diaktifkan: Janji 30 hari, Cerita 90 hari, Purnama 180 hari.</li>
        </ul>
      </details>
      <details class="sk-item">
        <summary><span class="sk-num">04</span>Custom tema</summary>
        <ul>
          <li>Khusus Paket Cerita &amp; Purnama. Pemesan Paket Janji dapat upgrade ke Paket Cerita.</li>
          <li>Konsultasikan desain lebih dulu. Harga Rp105.000 hanya bila desain sudah sesuai format; referensi atau screenshot undangan lain dihitung desain dari awal (Rp215.000).</li>
          <li>Opsi Private (+Rp205.000): tema hanya digunakan untuk 1 klien. Tanpa opsi Private, tema custom tidak eksklusif.</li>
          <li>Opsi Express (+Rp215.000): proses lebih cepat; estimasi waktu dikonfirmasi admin sebelum pembayaran.</li>
          <li>Proses reguler ±7 hari sejak brief, materi, dan pembayaran lengkap. Revisi desain maksimal 4 kali.</li>
          <li>Hasil tidak bisa 100% sama dengan referensi karena menyesuaikan layout, elemen yang tersedia, dan perangkat yang membuka undangan. Memakai layout yang tersedia membuat proses lebih cepat.</li>
          <li>Maksimal 3 font berlisensi komersial; Google Fonts disarankan.</li>
          <li>Dibayar 100% di awal, terpisah dari pembayaran paket, dan tidak ikut harga opening atau promo lain.</li>
          <li>Aset dan referensi harus boleh dipakai. Kami tidak menerima desain yang meniru karakter berlisensi, logo merek, atau karya pihak lain.</li>
        </ul>
      </details>
      <details class="sk-item">
        <summary><span class="sk-num">05</span>Pembatalan</summary>
        <ul>
          <li>Pembatalan sebelum undangan mulai dibuat: pembayaran dikembalikan penuh.</li>
          <li>Setelah undangan dibuat atau diaktifkan, pembayaran paket tidak dapat dikembalikan.</li>
          <li>Biaya custom tema dikembalikan penuh hanya sebelum pesanan diteruskan ke tim desain.</li>
        </ul>
      </details>
    </div>
  </div>
</section>

<!-- ============================== TESTIMONI ============================== -->
<!-- PENTING: testimoni di bawah adalah CONTOH TAMPILAN. Ganti dengan ulasan asli pelanggan
     (dengan izin mereka) dan hapus elemen .sample-note sebelum website dipublikasikan. -->
<section class="section section--romantic" id="testimoni" hidden>
  <div class="container" style="text-align:center">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Cerita Mereka</span>
      <h2>Momen yang <span class="accent">dibagikan dengan bangga</span></h2>
    </div>
    <p class="sample-note">Contoh tampilan — ganti dengan testimoni asli pelanggan sebelum dipublikasikan</p>
    <div class="testimonials" style="text-align:left">
      <figure class="quote reveal">
        <div class="quote__stars" aria-label="5 dari 5 bintang"><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg></div>
        <blockquote>[Tulis testimoni pelanggan pernikahan di sini — misalnya kesan tentang desain dan kemudahan RSVP.]</blockquote>
        <figcaption><span class="avatar">N</span><span><b>Nama Pelanggan</b><span>Pernikahan · Kota</span></span></figcaption>
      </figure>
      <figure class="quote reveal">
        <div class="quote__stars" aria-label="5 dari 5 bintang"><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg></div>
        <blockquote>[Tulis testimoni pelanggan aqiqah &amp; tasmiyah di sini — misalnya tentang tampilan arti nama ananda.]</blockquote>
        <figcaption><span class="avatar">N</span><span><b>Nama Pelanggan</b><span>Aqiqah &amp; Tasmiyah · Kota</span></span></figcaption>
      </figure>
      <figure class="quote reveal">
        <div class="quote__stars" aria-label="5 dari 5 bintang"><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg><svg aria-hidden="true"><use href="#i-star"/></svg></div>
        <blockquote>[Tulis testimoni pelanggan khitanan atau ulang tahun anak di sini.]</blockquote>
        <figcaption><span class="avatar">N</span><span><b>Nama Pelanggan</b><span>Khitanan · Kota</span></span></figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ============================== FAQ ============================== -->
<section class="section" id="faq">
  <div class="container faq-wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Pertanyaan Umum</span>
      <h2>Masih ada <span class="accent">yang ingin ditanyakan?</span></h2>
      <p>Tidak menemukan jawabannya? Tim kami siap membantu lewat WhatsApp.</p>
      <a class="btn btn--outline" data-wa="Saya ingin bertanya seputar undangan digital." href="#kontak">Tanya via WhatsApp</a>
    </div>
    <div class="faq-list reveal">
      <details class="faq-item" open>
        <summary>Berapa lama proses pembuatan undangan?</summary>
        <div class="answer">Untuk tema dari katalog, undangan siap dalam 1×24 jam setelah data lengkap kami terima. Paket Purnama dengan kustomisasi warna dan susunan membutuhkan sekitar 3–5 hari kerja.</div>
      </details>
      <details class="faq-item">
        <summary>Apa itu harga opening?</summary>
        <div class="answer">Harga khusus peluncuran JANJIARA: Janji Rp49.000, Cerita Rp69.000, dan Purnama Rp99.000, untuk 10 pelanggan pertama atau sampai 4 November 2026 pukul 19.00 WIB, mana yang lebih dulu. Setelah itu berlaku harga normal: Janji Rp59.000, Cerita Rp79.000, dan Purnama Rp109.000. Harga opening tidak dapat digabung dengan promo lain, dan hanya berlaku untuk harga paket; add-on dan custom tema memakai harga normal.</div>
      </details>
      <details class="faq-item">
        <summary>Apakah bisa untuk acara selain pernikahan?</summary>
        <div class="answer">Bisa. Kami melayani ulang tahun anak, khitanan, aqiqah &amp; tasmiyah, lamaran, tujuh bulanan, syukuran rumah baru, wisuda, khataman, halal bihalal, reuni, hingga haul dan tahlilan. Isi dan susunan halamannya kami sesuaikan dengan acara.</div>
      </details>
      <details class="faq-item">
        <summary>Bisakah memakai lagu pilihan sendiri?</summary>
        <div class="answer">Bisa. Musik custom sudah termasuk di Paket Cerita dan Purnama, dan tersedia sebagai add-on Rp15.000 untuk Paket Janji. Kirimkan file lagunya kepada kami, dan pastikan lagu tersebut boleh Anda gunakan. Versi instrumental biasanya terdengar lebih elegan untuk undangan.</div>
      </details>
      <details class="faq-item">
        <summary>Apakah tamu perlu mengunduh aplikasi?</summary>
        <div class="answer">Tidak perlu. Undangan dibuka langsung di browser ponsel dari tautan yang Anda kirim lewat WhatsApp atau media sosial.</div>
      </details>
      <details class="faq-item">
        <summary>Bagaimana cara mengirim undangan dengan nama tamu?</summary>
        <div class="answer">Kirimkan daftar nama tamu, kami buatkan tautan khusus untuk setiap nama. Fitur ini termasuk di Paket Cerita dan Purnama, dan tersedia sebagai add-on untuk Paket Janji.</div>
      </details>
      <details class="faq-item">
        <summary>Apakah bisa memakai nuansa adat tertentu?</summary>
        <div class="answer">Bisa melalui Paket Purnama. Ceritakan adat dan warna yang Anda inginkan, kami sesuaikan warna dan susunan halamannya agar tetap elegan.</div>
      </details>
      <details class="faq-item" id="faq-custom-tema">
        <summary>Bisa request tema custom di luar katalog?</summary>
        <div class="answer">
          <p>Bisa, lewat add-on <b>custom tema</b> khusus Paket Cerita dan Purnama. Bila Anda memesan Paket Janji dan ingin tema custom, silakan upgrade dulu ke Paket Cerita. Desain tema dikerjakan oleh tim desain platform undangan mitra JANJIARA; admin JANJIARA mengurus brief, komunikasi, dan pengecekan hasil sampai undangan selesai.</p>
          <p><b>Harga.</b> Rp105.000 bila Anda sudah punya desain yang sesuai format, Rp215.000 bila desain dibuat dari awal. Opsi Private (tema hanya untuk Anda) +Rp205.000, opsi Express (proses lebih cepat) +Rp215.000. Harga tetap, terpisah dari harga paket, dan tidak ikut harga opening, voucher, atau promo lain.</p>
          <p><b>Aset desain</b> adalah file siap pakai seperti ornamen, ilustrasi, bingkai, latar, atau monogram (PNG transparan, SVG, PSD, atau AI) yang boleh Anda gunakan. Foto dan teks undangan bukan aset desain. Gambar inspirasi atau tangkapan layar undangan lain dihitung sebagai referensi, jadi masuk kategori desain dari awal. Admin memastikan kategorinya setelah melihat file Anda, sebelum pembayaran. Kirimkan aset atau referensinya lewat <a href="#faq-drive">satu link Google Drive</a> di Form Order bagian 6.</p>
          <p><b>Pembayaran.</b> Biaya custom tema dibayar 100% di awal, terpisah dari DP 50% paket. Contoh Cerita harga opening dengan desain sudah ada: Rp105.000 + DP Rp34.500 = Rp139.500 di awal, sisa Rp34.500 dilunasi setelah draft disetujui. Pengerjaan desain dimulai setelah pembayaran diterima dan brief lengkap.</p>
          <p><b>Pembatalan.</b> Sebelum pesanan diteruskan ke tim desain, biaya custom tema dikembalikan penuh. Setelah diteruskan, biaya custom tema tidak dapat dikembalikan.</p>
          <p><b>Revisi.</b> Revisi desain tema maksimal 4 kali. Hasil tidak bisa 100% sama dengan referensi karena menyesuaikan layout, elemen yang tersedia, dan perangkat; maksimal 3 font berlisensi komersial. Jatah revisi paket (misalnya 3 kali di Paket Cerita) berlaku untuk konten undangan, bukan desain tema. Perubahan konsep besar setelah desain dikerjakan dihitung sebagai pesanan custom tema baru.</p>
          <p><b>Waktu.</b> Proses reguler ±7 hari sejak brief, materi, dan pembayaran lengkap, di luar waktu pengerjaan paket. Estimasi Private dan Express dikonfirmasi admin sebelum pembayaran. Add-on pengerjaan kilat tidak mempercepat desain custom tema, jadi pesan jauh hari sebelum undangan akan disebar.</p>
          <p style="margin:0"><b>Hak pakai.</b> Pastikan aset dan referensi boleh Anda gunakan. Kami tidak bisa membuat desain yang meniru karakter berlisensi, logo merek, atau karya milik pihak lain.</p>
        </div>
      </details>
      <details class="faq-item" id="faq-drive">
        <summary>Bagaimana cara mengirim foto dan aset desainnya?</summary>
        <div class="answer">
          <p>Lewat <b>satu link Google Drive</b>. Kumpulkan semua bahan dalam satu folder, lalu tempel tautannya di kolom <i>Link folder Google Drive</i> pada Form Order bagian 6, atau kirim langsung ke admin via WhatsApp.</p>
          <p>Isi foldernya menyesuaikan kebutuhan acara Anda: foto mempelai atau tokoh acara, foto pre-wedding dan galeri, logo atau lambang acara, dan — bila memesan <a href="#faq-custom-tema">custom tema</a> — aset desain seperti ornamen, ilustrasi, bingkai, latar, atau monogram dalam PNG transparan, SVG, PSD, atau AI.</p>
          <p>Agar kami bisa membukanya, atur akses folder ke <b>&ldquo;Siapa saja yang memiliki link&rdquo;</b>. Kirimkan foto dengan resolusi aslinya, jangan hasil kompresi WhatsApp, supaya tetap tajam di undangan.</p>
          <p style="margin:0">Kolom ini opsional. Bila bahannya belum siap, Form Order tetap bisa dikirim dan linknya menyusul ke admin.</p>
        </div>
      </details>
      <details class="faq-item">
        <summary>Bagaimana cara pembayarannya?</summary>
        <div class="answer">Paket Janji dibayar lunas di awal, lalu akses Portal Pelanggan langsung kami kirim. Paket Cerita dan Purnama cukup DP 50% untuk memulai; pelunasan dilakukan setelah Anda menyetujui draft, sebelum tautan final dikirim. Pembayaran bisa langsung setelah mengisi Form Order (BCA, Bank Jago, DANA, GoPay, ShopeePay, atau QRIS atas nama NURCHOLIS), atau nanti lewat WhatsApp resmi 0851-2102-4405. Ketentuan lengkap ada di bagian <a href="#sk">Syarat &amp; Ketentuan</a>.</div>
      </details>
    </div>
  </div>
</section>

<!-- ============================== KONTAK ============================== -->
<section class="section" id="kontak">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow eyebrow--center">Hubungi Kami</span>
      <h2>Ceritakan acara Anda, <span class="accent">kami bantu siapkan</span></h2>
      <p>Isi formulir di bawah — pesan Anda langsung terkirim ke email JANJIARA. Atau chat kami di WhatsApp untuk respons lebih cepat.</p>
    </div>
    <div class="contact">
      <div class="contact__info reveal">
        <div class="contact__item">
          <span class="contact__icon"><svg aria-hidden="true"><use href="#i-message"/></svg></span>
          <div><b>WhatsApp</b><a data-wa="" href="#kontak">+62 851-2102-4405</a></div>
        </div>
        <div class="contact__item">
          <span class="contact__icon"><svg aria-hidden="true"><use href="#i-mail"/></svg></span>
          <div><b>Email</b><a class="js-mailto" href="mailto:janjiara.digital@gmail.com?subject=Pemesanan%20Undangan%20Digital%20JANJIARA" target="_top">janjiara.digital@gmail.com</a></div>
        </div>
        <div class="contact__item">
          <span class="contact__icon"><svg aria-hidden="true"><use href="#i-camera"/></svg></span>
          <div><b>Instagram</b><a class="js-instagram" href="https://www.instagram.com/janjiara.digital?vrfl=dTdtenM5bnc1ZXQw&amp;utm_source=qr" target="_blank" rel="noopener">@janjiara.digital</a></div>
        </div>
        <div class="contact__item">
          <span class="contact__icon"><svg aria-hidden="true"><use href="#i-map"/></svg></span>
          <div><b>Alamat</b><address>Jl. Baiduri Bulan No. 8A, RT.006/RW.011, Bidaracina, Jatinegara, Jakarta Timur 13330</address></div>
        </div>
        <div class="contact__item">
          <span class="contact__icon"><svg aria-hidden="true"><use href="#i-clock"/></svg></span>
          <div><b>Jam layanan</b><span>Senin–Sabtu, 09.00–20.00 WIB</span></div>
        </div>
      </div>

      <form class="contact__form reveal" id="contact-form" novalidate>
        <div class="form-row">
          <label class="field"><span>Nama lengkap</span><input name="nama" type="text" autocomplete="name" required placeholder="Nama Anda"></label>
          <label class="field"><span>Nomor WhatsApp</span><input name="whatsapp" type="tel" autocomplete="tel" inputmode="tel" required placeholder="08xx-xxxx-xxxx"></label>
        </div>
        <label class="field"><span>Email (opsional)</span><input name="email" type="email" autocomplete="email" placeholder="nama@email.com"></label>
        <div class="form-row">
          <label class="field"><span>Jenis acara</span>
            <select name="acara" required>
              <option value="">Pilih acara</option>
              <option>Pernikahan</option><option>Ulang Tahun Anak</option><option>Khitanan</option>
              <option>Aqiqah &amp; Tasmiyah</option><option>Lamaran &amp; Tunangan</option><option>Syukuran</option><option>Acara lainnya</option>
            </select>
          </label>
          <label class="field"><span>Paket</span>
            <select name="paket">
              <option value="Belum tahu">Belum tahu</option>
              <option>Janji</option><option>Cerita</option><option>Purnama</option>
            </select>
          </label>
        </div>
        <label class="field"><span>Tanggal acara (opsional)</span><input name="tanggal" type="date"></label>
        <label class="field"><span>Pesan</span><textarea name="pesan" rows="4" required placeholder="Ceritakan acara dan tema yang Anda inginkan"></textarea></label>
        <input type="text" name="_honey" class="visually-hidden" tabindex="-1" autocomplete="off" aria-hidden="true">
        <button class="btn btn--primary btn--block" type="submit"><svg aria-hidden="true"><use href="#i-mail"/></svg>Kirim Pesan</button>
        <p class="form-status" role="status" aria-live="polite"></p>
        <p class="form-hint">Data hanya digunakan untuk menghubungi Anda terkait pesanan.</p>
      </form>
    </div>

    <div class="cta reveal" style="margin-top:72px">
      <div style="position:relative;z-index:1">
        <h2>Siap membagikan cerita Anda?</h2>
        <p>Konsultasi gratis — ceritakan acaranya, kami bantu pilihkan tema yang paling pas.</p>
      </div>
      <div class="cta__actions">
        <a class="btn btn--light" data-wa="" href="#kontak"><svg aria-hidden="true"><use href="#i-message"/></svg>Chat WhatsApp</a>
        <a class="btn btn--ghost-light" href="#tema">Lihat Tema</a>
      </div>
    </div>
  </div>
</section>

</main>

<!-- ============================== HALAMAN FORM ORDER ==============================
     Halaman ini berada di file yang sama dan tampil saat alamat berakhiran #order
     (contoh: #order?paket=Cerita&tema=Fohoway&kategori=wedding untuk mengisi otomatis).
     Data dikirim ke email JANJIARA (FormSubmit) lalu pelanggan diarahkan konfirmasi via WhatsApp. -->
<div class="order-page" id="order" hidden>
  <section class="order-hero">
    <div class="container">
      <a class="order-back" href="#top"><svg aria-hidden="true"><use href="#i-arrow"/></svg>Kembali ke beranda</a>
      <span class="eyebrow">Form Order</span>
      <h1>Ceritakan momenmu, <span class="accent">kami rangkai undangannya.</span></h1>
      <p>Isi dalam ±5 menit. Rincian biaya muncul otomatis, lalu kamu bisa langsung membayar atau mengobrol dulu dengan admin JANJIARA lewat WhatsApp.</p>
      <ol class="order-steps" aria-label="Langkah pemesanan">
        <li><b>1</b>Pilih momen</li><li><b>2</b>Ceritakan kisahnya</li><li><b>3</b>Pilih paket</li><li><b>4</b>Kirim &amp; bayar</li>
      </ol>
    </div>
  </section>

  <section class="order-body">
    <div class="container order-layout">
      <form class="order-form" id="order-form" novalidate>
        <!-- =============== 1. MOMEN =============== -->
        <fieldset class="order-card">
          <legend><b>1</b>Momen yang dirayakan</legend>
          <p class="order-hint order-hint--lead">Setiap janji punya cerita. Pilih dulu momen yang ingin kamu abadikan dalam undangan.</p>
          <div class="choice-grid choice-grid--cat">
          <label class="choice"><input type="radio" name="kategori" value="wedding" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-rings"/></svg><span>Pernikahan</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="lamaran" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-heart"/></svg><span>Lamaran &amp; Tunangan</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="khitan" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-shield"/></svg><span>Tasyakuran Khitan</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="aqiqah" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-moon"/></svg><span>Aqiqah &amp; Tasmiyah</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="birthday" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-cake"/></svg><span>Ulang Tahun</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="party" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-users"/></svg><span>Pesta &amp; Makan Malam</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="opening" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-store"/></svg><span>Grand Opening</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="graduation" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-cap"/></svg><span>Purnabakti &amp; Wisuda</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="syukuran" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-hands"/></svg><span>Syukuran &amp; Pengajian</span></span></label>
          <label class="choice"><input type="radio" name="kategori" value="umum" data-label="Momen" required>
            <span class="choice__box"><svg aria-hidden="true"><use href="#i-chat"/></svg><span>Momen Lainnya</span></span></label>
          </div>
        </fieldset>

        <!-- =============== 2. PEMESAN =============== -->
        <fieldset class="order-card">
          <legend><b>2</b>Tentang pemesan</legend>
          <div class="field-grid">
            <label class="field"><span>Nama pemesan <i aria-hidden="true">*</i></span><input name="pemesan" type="text" placeholder="Nama lengkapmu" data-label="Nama pemesan" required autocomplete="name"></label>
            <label class="field"><span>Nomor WhatsApp <i aria-hidden="true">*</i></span><input name="wa" type="tel" placeholder="08xx-xxxx-xxxx" data-label="Nomor WhatsApp" required autocomplete="tel" inputmode="tel"></label>
            <label class="field field--full"><span>Email <small>(opsional)</small></span><input name="email" type="email" placeholder="nama@email.com" data-label="Email" autocomplete="email"></label>
          </div>
        </fieldset>

        <!-- =============== 3. PAKET & TEMA =============== -->
        <fieldset class="order-card">
          <legend><b>3</b>Paket &amp; tema undangan</legend>
          <div class="choice-grid choice-grid--paket">
          <label class="choice choice--paket"><input type="radio" name="paket" value="Janji" data-label="Paket" required>
            <span class="choice__box"><span class="choice__head"><b>Janji</b></span>
            <span class="choice__price" data-normal="Rp59rb">Rp49rb <s>Rp59.000</s></span><span class="choice__desc">Aktif 30 hari · isi &amp; edit sendiri lewat Portal Pelanggan</span></span></label>
          <label class="choice choice--paket"><input type="radio" name="paket" value="Cerita" data-label="Paket" required>
            <span class="choice__box"><span class="choice__head"><b>Cerita</b><em>Rekomendasi</em></span>
            <span class="choice__price" data-normal="Rp79rb">Rp69rb <s>Rp79.000</s></span><span class="choice__desc">Aktif 90 hari · dibuatkan admin · galeri, musik pilihan, nama tamu, amplop digital</span></span></label>
          <label class="choice choice--paket"><input type="radio" name="paket" value="Purnama" data-label="Paket" required>
            <span class="choice__box"><span class="choice__head"><b>Purnama</b></span>
            <span class="choice__price" data-normal="Rp109rb">Rp99rb <s>Rp109.000</s></span><span class="choice__desc">Aktif 180 hari · dibuatkan admin · warna &amp; susunan custom, video &amp; live streaming</span></span></label>
          </div>
          <p class="order-hint js-janji-note" hidden>Paket Janji: setelah pembayaran lunas, kamu menerima akses Portal Pelanggan untuk mengisi dan mengubah undangan sendiri. Isian di bawah boleh dilengkapi sekarang sebagai catatan, atau pilih add-on <b>Data diisikan admin</b>.</p>
          <div class="field-grid" style="margin-top:18px">
            <label class="field field--full"><span>Tema pilihan <small>(opsional)</small></span><input name="tema" type="text" placeholder="Nama tema dari katalog, atau kosongkan untuk konsultasi" data-label="Tema pilihan"></label>
            <label class="field field--full"><span>Custom tema <small>(opsional · khusus Cerita &amp; Purnama)</small></span>
              <select name="custom_tema" data-label="Custom tema">
                <option value="" data-harga="0">Tidak, pakai tema dari katalog</option>
                <option value="Sudah punya desain (Rp105.000)" data-harga="105000">Ya — sudah punya desain (Rp105.000)</option>
                <option value="Desain dari awal (Rp215.000)" data-harga="215000">Ya — desain dari awal (Rp215.000)</option>
              </select>
            </label>
          </div>
          <div class="opt-row js-custom-opts" hidden>
            <label class="check check--inline"><input type="checkbox" name="ct_private" value="Ya (+Rp205.000)" data-label="Custom tema: opsi Private" data-harga="205000"><span><b>Private</b> +Rp205.000 — tema hanya untukmu</span></label>
            <label class="check check--inline"><input type="checkbox" name="ct_express" value="Ya (+Rp215.000)" data-label="Custom tema: opsi Express" data-harga="215000"><span><b>Express</b> +Rp215.000 — proses lebih cepat</span></label>
          </div>
          <p class="order-hint js-custom-hint">Custom tema dibayar penuh di awal, terpisah dari paket, dan tidak ikut harga opening. Admin memastikan kategori setelah melihat file desainmu. <a href="#custom-tema">Lihat ketentuan</a></p>
        </fieldset>

        <!-- =============== 4. KISAH UTAMA (per momen) =============== -->
        <fieldset class="order-card">
          <legend><b>4</b>Kisah utama</legend>
          <p class="order-hint js-cat-hint">Pilih momen di bagian 1 untuk menampilkan isian yang sesuai.</p>

          <div class="order-group" data-show="wedding" hidden>
            <label class="field field--full"><span>Nama yang ditulis lebih dulu <i aria-hidden="true">*</i></span>
              <select name="urutan" data-label="Urutan nama mempelai" required><option value="">— Pilih —</option><option>Mempelai pria, lalu mempelai wanita</option><option>Mempelai wanita, lalu mempelai pria</option></select></label>
            <div class="couple-grid">
              <div class="couple-card">
                <h4>Mempelai pria</h4>
                <label class="field"><span>Nama panggilan <i aria-hidden="true">*</i></span><input name="pria_panggilan" type="text" placeholder="Contoh: Dimas" data-label="Pria: nama panggilan" required></label>
                <label class="field"><span>Nama lengkap <i aria-hidden="true">*</i></span><input name="pria" type="text" placeholder="Nama lengkap & gelar" data-label="Pria: nama lengkap" required></label>
                <div class="field-grid field-grid--2"><label class="field"><span>Putra ke-</span><input name="pria_anakke" type="number" min="1" max="20" placeholder="2" data-label="Pria: putra ke-"></label><label class="field"><span>dari … bersaudara</span><input name="pria_saudara" type="number" min="1" max="20" placeholder="4" data-label="Pria: jumlah bersaudara"></label></div>
                <label class="field"><span>Nama orang tua <i aria-hidden="true">*</i></span><textarea name="pria_ortu" rows="2" placeholder="Bapak … &amp; Ibu …" data-label="Pria: orang tua" required></textarea></label>
                <label class="field"><span>Instagram <small>(opsional)</small></span><input name="ig_pria" type="text" placeholder="@username" data-label="Pria: Instagram"></label>
              </div>
              <div class="couple-card">
                <h4>Mempelai wanita</h4>
                <label class="field"><span>Nama panggilan <i aria-hidden="true">*</i></span><input name="wanita_panggilan" type="text" placeholder="Contoh: Rania" data-label="Wanita: nama panggilan" required></label>
                <label class="field"><span>Nama lengkap <i aria-hidden="true">*</i></span><input name="wanita" type="text" placeholder="Nama lengkap & gelar" data-label="Wanita: nama lengkap" required></label>
                <div class="field-grid field-grid--2"><label class="field"><span>Putri ke-</span><input name="wanita_anakke" type="number" min="1" max="20" placeholder="1" data-label="Wanita: putri ke-"></label><label class="field"><span>dari … bersaudara</span><input name="wanita_saudara" type="number" min="1" max="20" placeholder="3" data-label="Wanita: jumlah bersaudara"></label></div>
                <label class="field"><span>Nama orang tua <i aria-hidden="true">*</i></span><textarea name="wanita_ortu" rows="2" placeholder="Bapak … &amp; Ibu …" data-label="Wanita: orang tua" required></textarea></label>
                <label class="field"><span>Instagram <small>(opsional)</small></span><input name="ig_wanita" type="text" placeholder="@username" data-label="Wanita: Instagram"></label>
              </div>
            </div>
            <label class="field field--full"><span>Agama <small>(untuk menyesuaikan prosesi)</small></span>
              <select name="agama" data-label="Agama"><option value="">— Pilih —</option><option>Islam</option><option>Kristen</option><option>Katolik</option><option>Hindu</option><option>Buddha</option><option>Konghucu</option><option>Lainnya</option></select></label>
          </div>

          <div class="order-group" data-show="lamaran" hidden><div class="field-grid">
            <label class="field"><span>Nama pria <i aria-hidden="true">*</i></span><input name="pria" type="text" placeholder="Nama lengkap" data-label="Nama pria" required></label>
            <label class="field"><span>Nama wanita <i aria-hidden="true">*</i></span><input name="wanita" type="text" placeholder="Nama lengkap" data-label="Nama wanita" required></label>
            <label class="field field--full"><span>Nama orang tua / keluarga <small>(opsional)</small></span><textarea name="keluarga" rows="2" placeholder="Keluarga Bapak … &amp; keluarga Bapak …" data-label="Keluarga"></textarea></label></div></div>

          <div class="order-group" data-show="khitan" hidden><div class="field-grid">
            <label class="field"><span>Nama lengkap ananda <i aria-hidden="true">*</i></span><input name="anak" type="text" placeholder="Nama lengkap" data-label="Nama lengkap ananda" required></label>
            <label class="field"><span>Nama panggilan <small>(opsional)</small></span><input name="panggilan" type="text" placeholder="Nama panggilan" data-label="Nama panggilan"></label>
            <label class="field"><span>Anak ke- <small>(opsional)</small></span><input name="anakke" type="number" min="1" max="20" placeholder="2" data-label="Anak ke-"></label>
            <label class="field field--full"><span>Nama orang tua <i aria-hidden="true">*</i></span><textarea name="ortu" rows="2" placeholder="Putra dari Bapak … &amp; Ibu …" data-label="Nama orang tua" required></textarea></label></div></div>

          <div class="order-group" data-show="aqiqah" hidden><div class="field-grid">
            <label class="field"><span>Nama lengkap ananda <i aria-hidden="true">*</i></span><input name="anak" type="text" placeholder="Nama lengkap" data-label="Nama lengkap ananda" required></label>
            <label class="field"><span>Nama panggilan <small>(opsional)</small></span><input name="panggilan" type="text" placeholder="Nama panggilan" data-label="Nama panggilan"></label>
            <label class="field"><span>Jenis kelamin <i aria-hidden="true">*</i></span><select name="jk" data-label="Jenis kelamin" required><option value="">— Pilih —</option><option>Putra</option><option>Putri</option></select></label>
            <label class="field"><span>Anak ke- <small>(opsional)</small></span><input name="anakke" type="number" min="1" max="20" placeholder="1" data-label="Anak ke-"></label>
            <label class="field"><span>Tanggal lahir <small>(opsional)</small></span><input name="lahir" type="date" data-label="Tanggal lahir"></label>
            <label class="field field--full"><span>Nama ayah &amp; ibu <i aria-hidden="true">*</i></span><textarea name="ortu" rows="2" placeholder="Putra/Putri dari Bapak … &amp; Ibu …" data-label="Nama ayah &amp; ibu" required></textarea></label>
            <label class="field field--full"><span>Arti nama ananda <small>(opsional)</small></span><textarea name="arti" rows="2" placeholder="Makna nama yang ingin ditampilkan" data-label="Arti nama ananda"></textarea></label></div></div>

          <div class="order-group" data-show="birthday" hidden><div class="field-grid">
            <label class="field"><span>Nama yang berulang tahun <i aria-hidden="true">*</i></span><input name="anak" type="text" placeholder="Nama" data-label="Nama yang berulang tahun" required></label>
            <label class="field"><span>Ulang tahun ke- <i aria-hidden="true">*</i></span><input name="usia" type="number" placeholder="5" data-label="Ulang tahun ke-" required min="1" max="120"></label>
            <label class="field field--full"><span>Nama orang tua <small>(opsional)</small></span><textarea name="ortu" rows="2" placeholder="Bapak … &amp; Ibu …" data-label="Nama orang tua"></textarea></label></div></div>

          <div class="order-group" data-show="party" hidden><div class="field-grid">
            <label class="field"><span>Nama acara <i aria-hidden="true">*</i></span><input name="judul" type="text" placeholder="Contoh: Dinner Anniversary ke-10" data-label="Nama acara" required></label>
            <label class="field"><span>Tuan rumah / penyelenggara <i aria-hidden="true">*</i></span><input name="tuan_rumah" type="text" placeholder="Keluarga Bapak …" data-label="Penyelenggara" required></label></div></div>

          <div class="order-group" data-show="opening" hidden><div class="field-grid">
            <label class="field"><span>Nama usaha / bisnis <i aria-hidden="true">*</i></span><input name="usaha" type="text" placeholder="Nama usaha" data-label="Nama usaha" required></label>
            <label class="field"><span>Jenis usaha <small>(opsional)</small></span><input name="jenis_usaha" type="text" placeholder="Contoh: Kafe, butik" data-label="Jenis usaha"></label>
            <label class="field field--full"><span>Nama pemilik <small>(opsional)</small></span><input name="pemilik" type="text" placeholder="Nama pemilik usaha" data-label="Nama pemilik"></label></div></div>

          <div class="order-group" data-show="graduation" hidden><div class="field-grid">
            <label class="field"><span>Nama lengkap <i aria-hidden="true">*</i></span><input name="nama_tokoh" type="text" placeholder="Nama lengkap &amp; gelar" data-label="Nama lengkap" required></label>
            <label class="field"><span>Jabatan / program studi <small>(opsional)</small></span><input name="jabatan" type="text" placeholder="Contoh: Kepala Sekolah / S1 Akuntansi" data-label="Jabatan / program studi"></label>
            <label class="field field--full"><span>Instansi / sekolah / kampus <small>(opsional)</small></span><input name="instansi" type="text" placeholder="Nama instansi" data-label="Instansi"></label></div></div>

          <div class="order-group" data-show="syukuran umum" hidden><div class="field-grid">
            <label class="field"><span>Nama acara <i aria-hidden="true">*</i></span><input name="judul" type="text" placeholder="Contoh: Tasyakuran Rumah Baru" data-label="Nama acara" required></label>
            <label class="field"><span>Tuan rumah / penyelenggara <i aria-hidden="true">*</i></span><input name="tuan_rumah" type="text" placeholder="Keluarga Bapak …" data-label="Penyelenggara" required></label>
            <label class="field field--full"><span>Keterangan acara <small>(opsional)</small></span><textarea name="deskripsi" rows="2" placeholder="Ceritakan singkat tentang acaranya" data-label="Keterangan acara"></textarea></label></div></div>
        </fieldset>

        <!-- =============== 5. JADWAL & TEMPAT =============== -->
        <fieldset class="order-card">
          <legend><b>5</b>Jadwal &amp; tempat</legend>
          <div class="event-block">
            <h4>Acara utama</h4>
            <div class="field-grid">
              <label class="field field--full"><span>Nama acara <i aria-hidden="true">*</i></span><input name="acara1" type="text" placeholder="Contoh: Akad Nikah / Tasyakuran" data-label="Acara utama" required list="jj-acara-list"></label>
              <label class="field"><span>Tanggal <i aria-hidden="true">*</i></span><input name="waktu1" type="date" data-label="Tanggal acara utama" required></label>
              <label class="field"><span>Waktu <i aria-hidden="true">*</i></span><input name="jam1" type="text" placeholder="Contoh: 08.00 – 10.00 WIB" data-label="Waktu acara utama" required></label>
              <label class="field"><span>Nama tempat <i aria-hidden="true">*</i></span><input name="tempat1" type="text" placeholder="Contoh: Masjid Al-Ikhlas" data-label="Tempat acara utama" required></label>
              <label class="field"><span>Link Google Maps <small>(opsional)</small></span><input name="maps1" type="url" placeholder="https://maps.app.goo.gl/..." data-label="Google Maps acara utama"></label>
              <label class="field field--full"><span>Alamat lengkap <i aria-hidden="true">*</i></span><textarea name="lokasi1" rows="2" placeholder="Jalan, kelurahan, kota" data-label="Alamat acara utama" required></textarea></label>
            </div>
          </div>
          <datalist id="jj-acara-list"><option value="Akad Nikah"><option value="Pemberkatan"><option value="Resepsi"><option value="Ngunduh Mantu"><option value="Lamaran"><option value="Pengajian"><option value="Siraman"><option value="Tasyakuran"><option value="Aqiqah"><option value="Khitanan"><option value="Pesta Ulang Tahun"><option value="Grand Opening"></datalist>
          <div class="dyn-list" id="jj-acara-extra" aria-live="polite"></div>
          <button class="btn-add" type="button" data-add="acara"><span aria-hidden="true">+</span> Tambah rangkaian acara <small>(resepsi, pengajian, siraman · maks. 10)</small></button>
        </fieldset>

        <!-- =============== 6. CERITA PELENGKAP =============== -->
        <fieldset class="order-card">
          <legend><b>6</b>Cerita pelengkap <small>(opsional)</small></legend>
          <p class="order-hint">Dimasukkan bila tema yang dipilih menyediakan bagiannya. Boleh dikosongkan.</p>
          <div class="music-pick">
            <span class="field__label">Musik undangan</span>
            <label class="check check--inline"><input type="radio" name="musik_mode" value="Judul lagu" data-label="Musik"><span>Judul lagu</span></label>
            <label class="check check--inline"><input type="radio" name="musik_mode" value="Link YouTube" data-label="Musik"><span>Link YouTube</span></label>
            <label class="check check--inline"><input type="radio" name="musik_mode" value="Tanpa musik" data-label="Musik"><span>Tanpa musik</span></label>
            <label class="field field--full js-musik-detail" hidden><span class="js-musik-label">Judul lagu</span><input name="musik" type="text" placeholder="Contoh: A Thousand Years (instrumental)" data-label="Lagu / link"></label>
            <p class="order-hint js-musik-janji" hidden>Paket Janji memakai musik bawaan tema. Ingin lagu pilihan sendiri? Centang add-on <b>Musik custom</b> di bagian 9.</p>
          </div>
          <details class="order-more">
            <summary>+ Love story (kisah perjalanan)</summary>
            <div class="dyn-list" id="jj-story-list"></div>
            <button class="btn-add" type="button" data-add="story"><span aria-hidden="true">+</span> Tambah babak cerita</button>
          </details>
          <details class="order-more">
            <summary>+ Turut mengundang</summary>
            <div class="field-grid">
              <label class="field"><span>Dari keluarga pria / pihak 1</span><textarea name="turut_1" rows="3" placeholder="Satu nama per baris&#10;Bpk. Ahmad sekeluarga" data-label="Turut mengundang (pihak 1)"></textarea></label>
              <label class="field"><span>Dari keluarga wanita / pihak 2</span><textarea name="turut_2" rows="3" placeholder="Satu nama per baris&#10;Ibu Siti sekeluarga" data-label="Turut mengundang (pihak 2)"></textarea></label>
            </div>
          </details>
          <div class="field-grid" style="margin-top:14px">
            <label class="field"><span>Dress code <small>(opsional)</small></span><input name="dresscode" type="text" placeholder="Contoh: Sage & krem, batik" data-label="Dress code"></label>
            <label class="field" data-paket="Purnama"><span>Link video <small>(Purnama)</small></span><input name="video" type="url" placeholder="https://youtube.com/..." data-label="Link video"></label>
            <label class="field field--full" data-paket="Purnama"><span>Link live streaming <small>(Purnama)</small></span><input name="live" type="url" placeholder="https://youtube.com/live/... atau Instagram" data-label="Link live streaming"></label>
          </div>
        </fieldset>

        <!-- =============== 7. AMPLOP & KADO =============== -->
        <fieldset class="order-card" data-paket="Cerita Purnama">
          <legend><b>7</b>Amplop digital &amp; kado <small>(Cerita &amp; Purnama)</small></legend>
          <p class="order-hint">Rekening atau e-wallet untuk tamu yang ingin mengirim tanda kasih. Maksimal 2. Boleh dikirim menyusul ke admin.</p>
          <div class="dyn-list" id="jj-rek-list"></div>
          <button class="btn-add" type="button" data-add="rek"><span aria-hidden="true">+</span> Tambah rekening / e-wallet</button>
          <label class="field field--full" style="margin-top:14px"><span>Alamat kirim kado <small>(opsional)</small></span><textarea name="kado" rows="2" placeholder="Alamat lengkap, kode pos, nama penerima" data-label="Alamat kirim kado"></textarea></label>
        </fieldset>

        <!-- =============== 8. FOTO & ASET =============== -->
        <fieldset class="order-card">
          <legend><b>8</b>Foto &amp; aset <small>(opsional)</small></legend>
          <div class="field-grid">
            <label class="field field--full"><span>Link folder Google Drive <small>(opsional)</small></span>
              <input name="drive" type="url" inputmode="url" placeholder="https://drive.google.com/drive/folders/..." data-label="Link Google Drive">
            </label>
          </div>
          <p class="order-hint">Kumpulkan foto mempelai/tokoh acara, galeri, logo, dan aset desain custom tema dalam <b>satu folder Google Drive</b>, lalu atur aksesnya ke <b>&ldquo;Siapa saja yang memiliki link&rdquo;</b>. Boleh menyusul lewat WhatsApp.</p>
        </fieldset>

        <!-- =============== 9. SENTUHAN TAMBAHAN =============== -->
        <fieldset class="order-card">
          <legend><b>9</b>Sentuhan tambahan <small>(add-on)</small></legend>
          <div class="addon-grid">
            <label class="addon-pick" data-paket="Janji"><input type="checkbox" name="ad_musik" value="Musik custom (+Rp15.000)" data-label="Add-on: musik custom" data-harga="15000"><span><b>Musik custom</b><small>Lagu pilihanmu untuk Paket Janji</small><em>+Rp15.000</em></span></label>
            <label class="addon-pick" data-paket="Janji"><input type="checkbox" name="ad_tamu" value="Nama tamu personal (+Rp10.000)" data-label="Add-on: nama tamu personal" data-harga="10000"><span><b>Nama tamu personal</b><small>Tautan khusus tiap tamu (Janji)</small><em>+Rp10.000</em></span></label>
            <label class="addon-pick" data-paket="Janji"><input type="checkbox" name="ad_isi" value="Data diisikan admin (+Rp15.000)" data-label="Add-on: data diisikan admin" data-harga="15000"><span><b>Data diisikan admin</b><small>Tak sempat mengisi portal? Kami bantu</small><em>+Rp15.000</em></span></label>
            <label class="addon-pick"><input type="checkbox" name="ad_kilat" value="Pengerjaan kilat (+Rp15.000)" data-label="Add-on: pengerjaan kilat" data-harga="15000"><span><b>Pengerjaan kilat</b><small>Antrean prioritas admin</small><em>+Rp15.000</em></span></label>
          </div>
          <p class="order-hint">Add-on memakai harga normal dan dibayar di awal bersama pembayaran pertama.</p>
        </fieldset>

        <!-- =============== 10. CATATAN & PERSETUJUAN =============== -->
        <fieldset class="order-card">
          <legend><b>10</b>Catatan &amp; persetujuan</legend>
          <div class="field-grid">
            <label class="field field--full"><span>Catatan untuk admin <small>(opsional)</small></span><textarea name="catatan" rows="3" placeholder="Warna favorit, nuansa adat, atau permintaan khusus" data-label="Catatan untuk admin"></textarea></label>
            <label class="field"><span>Kode promo / referral <small>(opsional)</small></span><input name="promo" type="text" placeholder="Contoh: JANJIOPENING" data-label="Kode promo / referral"></label>
          </div>
          <input type="hidden" name="_total" data-label="Total pesanan">
          <input type="hidden" name="_bayar" data-label="Dibayar di awal">
          <input type="hidden" name="_sisa" data-label="Pelunasan setelah draft disetujui">
          <label class="check"><input type="checkbox" name="setuju" value="Ya" data-label="Setuju ketentuan" required>
            <span>Saya sudah membaca <a href="#sk">Syarat &amp; Ketentuan</a>: Paket Janji dibayar lunas di awal; Paket Cerita &amp; Purnama DP 50% dan dilunasi setelah draft disetujui. Custom tema dan add-on dibayar penuh di awal.</span></label>
          <input type="text" name="_honey" class="visually-hidden" tabindex="-1" autocomplete="off" aria-hidden="true">
          <p class="order-gate" id="order-gate" role="status" aria-live="polite">Lengkapi kolom bertanda * lalu centang persetujuan di atas untuk mengaktifkan tombol kirim.</p>
          <button class="btn btn--primary btn--block order-submit" type="submit" id="order-submit" aria-describedby="order-gate" disabled><svg aria-hidden="true"><use href="#i-mail"/></svg>Kirim pesanan &amp; lanjut ke pembayaran</button>
          <p class="form-status order-status" role="status" aria-live="polite"></p>
        </fieldset>
      </form>

      <aside class="order-summary" aria-label="Ringkasan pesanan">
        <div class="order-summary__card">
          <h2>Ringkasan pesanan</h2>
          <dl>
            <div><dt>Momen</dt><dd data-sum="kategori">—</dd></div>
            <div><dt>Paket</dt><dd data-sum="paket">—</dd></div>
            <div><dt>Harga</dt><dd data-sum="harga">—</dd></div>
            <div><dt>Tema</dt><dd data-sum="tema">—</dd></div>
            <div><dt>Custom tema</dt><dd data-sum="custom">—</dd></div>
            <div><dt>Link Drive</dt><dd data-sum="drive">—</dd></div>
            <div><dt>Tanggal</dt><dd data-sum="waktu">—</dd></div>
          </dl>
          <div class="sum-bill" aria-live="polite">
            <div class="sum-bill__rows js-bill-rows"><p class="sum-bill__empty">Pilih paket untuk melihat rincian biaya.</p></div>
            <div class="sum-bill__total"><span>Total pesanan</span><b class="js-bill-total">Rp0</b></div>
            <div class="sum-bill__now"><span>Dibayar di awal</span><b class="js-bill-now">Rp0</b></div>
            <p class="sum-bill__later js-bill-later" hidden></p>
          </div>
          <p class="order-summary__note">Harga opening untuk 10 pelanggan pertama atau sampai 4 November 2026. Janji lunas di awal; Cerita &amp; Purnama DP 50%, lunas setelah draft disetujui.</p>
          <a class="btn btn--outline btn--block btn--sm" data-wa="Saya butuh bantuan mengisi Form Order 🤗" href="#kontak"><svg aria-hidden="true"><use href="#i-message"/></svg>Butuh bantuan? Chat admin</a>
        </div>
      </aside>

      <div class="order-success" hidden>
        <div class="pay-hero">
          <div class="pay-env" aria-hidden="true"><span class="pay-env__flap"></span><span class="pay-env__card">Pesanan tercatat</span><span class="pay-env__seal"><svg viewBox="-131.91 -269.91 263.82 328.23" style="--jj-logo-accent:#D7C3A0"><use href="#jj-mono"/></svg></span></div>
          <span class="eyebrow eyebrow--center">Langkah terakhir</span>
          <h2>Kunci tanggal bahagiamu</h2>
          <p>Data pesananmu sudah kami terima. Selesaikan pembayaran sekarang supaya admin langsung mulai, atau bayar nanti setelah ngobrol dengan admin.</p>
        </div>

        <div class="pay-amount">
          <div><span>Dibayar sekarang</span><b class="js-pay-now">Rp0</b><small class="js-pay-note"></small></div>
          <button class="pay-copy" type="button" data-copy-amount><svg aria-hidden="true"><use href="#i-check"/></svg><span>Salin nominal</span></button>
        </div>

        <h3 class="pay-title">Pilih cara bayar</h3>
        <div class="pay-grid" role="radiogroup" aria-label="Metode pembayaran"></div>
        <div class="pay-detail" aria-live="polite" hidden></div>

        <label class="field pay-sender"><span>Nama pengirim <small>(opsional, memudahkan admin mencocokkan)</small></span><input type="text" id="pay-sender" placeholder="Nama pemilik rekening / e-wallet"></label>

        <div class="order-success__actions pay-actions">
          <a class="btn btn--primary js-pay-done" href="#" aria-disabled="true"><svg aria-hidden="true"><use href="#i-message"/></svg>Saya sudah bayar — kirim bukti ke admin</a>
          <a class="btn btn--outline js-order-wa" href="#" target="_blank" rel="noopener"><svg aria-hidden="true"><use href="#i-chat"/></svg>Bayar nanti lewat admin</a>
        </div>
        <p class="pay-safe"><svg aria-hidden="true"><use href="#i-shield"/></svg>Pembayaran hanya ke rekening &amp; e-wallet atas nama <b>NURCHOLIS</b> di halaman ini. Admin JANJIARA tidak pernah meminta transfer ke nama lain.</p>
        <p class="order-note js-order-note" hidden></p>
        <a class="pay-home" href="#top">Kembali ke beranda</a>
      </div>
    </div>
  </section>
</div>


<!-- ============================== FOOTER ============================== -->
<!-- ============================== HALAMAN KATALOG TEMA ==============================
     Tampil saat alamat berakhiran #katalog-tema (opsional: #katalog-tema?kategori=wedding).
     DATA TEMA ada di <script>, cari "const JJ_TEMA = [" — satu baris per tema: ["slug", "kategori", "sub-kategori"]
       - slug     : nama file gambar TANPA .jpg, huruf kecil, tanda hubung tetap (contoh: adat-jawa)
                    -> gambar  : <TEMA_IMG>adat-jawa.webp  (CDN, lihat TEMA_IMG di script)
                    -> warna   : JJ_TEMA_WARNA["adat-jawa"] (opsional, latar kartu)
                    -> preview : https://janjiaraundangan.webinvit.id/preview/adat-jawa
                    -> nama    : "Adat Jawa" (otomatis: huruf depan tiap kata besar)
       - kategori : wedding | kids | khitan | aqiqah | other (sama dengan filter landing page)
     MENAMBAH TEMA BARU:
       (1) upload gambar ke repo holis12821/janjiara-tema, folder tema/, dengan nama slug.webp
       (2) tambah satu baris di JJ_TEMA
     JANGAN menaruh gambar di folder lokal lalu memakai path relatif seperti "tema/slug.webp".
     Halaman ini sering dipasang sendirian di subdomain tanpa folder pendampingnya, sehingga
     path relatif membuat semua gambar hilang. Semua aset HARUS berupa URL penuh. -->
<div class="catalog-page" id="katalog-tema" hidden>
  <section class="order-hero">
    <div class="container">
      <a class="order-back" href="#tema"><svg aria-hidden="true"><use href="#i-arrow"/></svg>Kembali ke beranda</a>
      <span class="eyebrow">Katalog Tema</span>
      <h1>Temukan tema, <span class="accent">pilih paketnya.</span></h1>
      <p>Lihat preview setiap tema, lalu pilih paket Janji, Cerita, atau Purnama. Pesanan langsung terhubung ke admin JANJIARA lewat WhatsApp.</p>
    </div>
  </section>
  <section class="order-body catalog-body">
    <div class="container">
      <div class="catalog-tools">
        <div class="filters catalog-filters" role="group" aria-label="Filter kategori tema">
          <button class="catalog-chip" type="button" data-cfilter="all" aria-pressed="true">Semua <span data-count="all"></span></button>
          <button class="catalog-chip" type="button" data-cfilter="wedding" aria-pressed="false">Pernikahan <span data-count="wedding"></span></button>
          <button class="catalog-chip" type="button" data-cfilter="kids" aria-pressed="false">Ulang Tahun Anak <span data-count="kids"></span></button>
          <button class="catalog-chip" type="button" data-cfilter="khitan" aria-pressed="false">Khitanan <span data-count="khitan"></span></button>
          <button class="catalog-chip" type="button" data-cfilter="aqiqah" aria-pressed="false">Aqiqah &amp; Tasmiyah <span data-count="aqiqah"></span></button>
          <button class="catalog-chip" type="button" data-cfilter="other" aria-pressed="false">Acara Lainnya <span data-count="other"></span></button>
        </div>
        <label class="field catalog-search"><span class="visually-hidden">Cari nama tema</span>
          <input type="search" id="catalog-q" placeholder="Cari nama tema, mis. jawa, floral, birthday" autocomplete="off"></label>
        <p class="catalog-count" id="catalog-count" aria-live="polite"></p>
      </div>
      <div class="catalog-grid" id="catalog-grid"></div>
      <p class="catalog-empty" id="catalog-empty" hidden>Tema tidak ditemukan. Coba kata lain, atau <a href="#" class="js-catalog-wa">tanya admin via WhatsApp</a>.</p>
      <div class="catalog-more" hidden><button class="btn btn--outline" type="button" id="catalog-more">Muat lebih banyak</button></div>
    </div>
  </section>
</div>

<!-- ============================== HALAMAN KATALOG VIDEO UCAPAN ==============================
     Tampil saat alamat berakhiran #katalog-video (opsional: #katalog-video?kategori=natal).
     DATA VIDEO ada di <script> paling bawah, cari "const JJ_VIDEO = [" — satu baris per video:
       ["slug", "kategori", "Nama Tampilan", "0:30"]
       - slug     : nama file TANPA .mp4, huruf kecil, tanda hubung tetap (contoh: natal-tahun-baru-001)
                    -> video  : <JJ_VIDEO_CFG.cdnBase>natal-tahun-baru-001.mp4
                    -> poster : <JJ_VIDEO_CFG.posterBase>natal-tahun-baru-001.webp
       - kategori : kunci dari JJ_VIDEO_KAT (natal | tahun-baru | lebaran | wedding | kids | khitan | aqiqah | lain)
       - nama     : opsional. Dikosongkan ("") = nama otomatis dari slug.
       - durasi   : opsional. Dikosongkan = pakai JJ_VIDEO_CFG.durasi.
     MENAMBAH VIDEO BARU: (1) upload slug.mp4 ke repo janjiara-tema folder video/ dan slug.webp ke video/poster/,
     (2) tambah satu baris di JJ_VIDEO. -->
<div class="catalog-page" id="katalog-video" hidden>
  <section class="order-hero">
    <div class="container">
      <a class="order-back" href="#video"><svg aria-hidden="true"><use href="#i-arrow"/></svg>Kembali ke beranda</a>
      <span class="eyebrow">Katalog Video Ucapan</span>
      <h1>Ucapan yang <span class="accent">bergerak dan bersuara.</span></h1>
      <p>Video ucapan siap pakai untuk Natal, Tahun Baru, dan momen spesial lainnya — tinggal ganti nama, foto, dan pesan Anda. Putar dulu contohnya, lalu pesan lewat WhatsApp admin JANJIARA.</p>
    </div>
  </section>
  <section class="order-body catalog-body">
    <div class="container">
      <div class="catalog-tools">
        <div class="filters catalog-filters" role="group" aria-label="Filter kategori video" id="vcat-filters"></div>
        <label class="field catalog-search"><span class="visually-hidden">Cari nama video</span>
          <input type="search" id="vcat-q" placeholder="Cari nama video, mis. natal, tahun baru" autocomplete="off"></label>
        <p class="catalog-count" id="vcat-count" aria-live="polite"></p>
      </div>
      <div class="vcat-grid" id="vcat-grid"></div>
      <p class="catalog-empty" id="vcat-empty" hidden>Video tidak ditemukan. Coba kata lain, atau <a href="#" class="js-video-wa">tanya admin via WhatsApp</a>.</p>
      <div class="catalog-more" hidden><button class="btn btn--outline" type="button" id="vcat-more">Muat lebih banyak</button></div>
    </div>
  </section>
</div>

<!-- Pemutar video (dipakai halaman Katalog Video dan kartu video di landing page) -->
<div class="vplayer" id="vplayer" hidden>
  <div class="vplayer__backdrop" data-close></div>
  <div class="vplayer__panel" role="dialog" aria-modal="true" aria-labelledby="vplayer-title">
    <button class="vplayer__close" type="button" data-close aria-label="Tutup"><svg aria-hidden="true"><use href="#i-x"/></svg></button>
    <div class="vplayer__stage">
      <video id="vplayer-video" controls playsinline preload="none"></video>
    </div>
    <div class="vplayer__meta">
      <span class="eyebrow">Video Ucapan</span>
      <h2 id="vplayer-title">Nama Video</h2>
      <ul class="vplayer__specs">
        <li><svg aria-hidden="true"><use href="#i-film"/></svg><span id="vplayer-kat">—</span></li>
        <li><svg aria-hidden="true"><use href="#i-clock"/></svg><span id="vplayer-dur">—</span></li>
        <li><svg aria-hidden="true"><use href="#i-phone"/></svg>Format vertikal 9:16, siap dibagikan ke WhatsApp &amp; Instagram Story</li>
      </ul>
      <p>Nama, foto, dan kalimat ucapan diganti sesuai permintaan Anda. Kirim datanya ke admin, video jadi dikirim dalam bentuk file siap bagikan.</p>
      <div class="vplayer__actions">
        <a class="btn btn--primary" id="vplayer-wa" href="#" target="_blank" rel="noopener"><svg aria-hidden="true"><use href="#i-message"/></svg>Pesan video ini</a>
        <a class="btn btn--outline" id="vplayer-form" href="#order">atau isi Form Order lengkap</a>
      </div>
    </div>
  </div>
</div>

<!-- Pemilih paket (dipakai halaman Katalog Tema dan kartu tema di landing page) -->
<div class="pkg-picker" id="pkg-picker" hidden>
  <div class="pkg-picker__backdrop" data-close></div>
  <div class="pkg-picker__panel" role="dialog" aria-modal="true" aria-labelledby="pkg-title">
    <button class="pkg-picker__close" type="button" data-close aria-label="Tutup"><svg aria-hidden="true"><use href="#i-x"/></svg></button>
    <div class="pkg-picker__head">
      <img id="pkg-img" src="" alt="" width="72" height="72">
      <div><span class="eyebrow">Tema pilihan</span><h2 id="pkg-title">Nama Tema</h2>
        <a id="pkg-preview" href="#" target="_blank" rel="noopener">Lihat preview <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    </div>
    <p class="pkg-picker__lead">Pilih paket — Anda akan diarahkan ke WhatsApp admin JANJIARA.</p>
    <div class="pkg-picker__list" id="pkg-list"></div>
    <a class="pkg-picker__form" id="pkg-form" href="#order">atau isi Form Order lengkap</a>
  </div>
</div>

<footer class="site-footer">
  <div class="container">
    <div class="footer__grid">
      <div class="footer__about">
        <a class="brand" href="#top" aria-label="JANJIARA — kembali ke atas" style="--jj-logo-accent: #D7C3A0">
          <svg viewBox="-15.84 -15.84 823.83 241.69" aria-hidden="true"><use href="#jj-logo-h"/></svg>
        </a>
        <p>Undangan digital yang elegan dan personal untuk setiap momen berharga keluarga Indonesia.</p>
        <p class="footer__tagline">Setiap Janji, Punya Cerita.</p>
      </div>
      <div>
        <h4>Acara</h4>
        <ul>
          <li><a href="#acara">Pernikahan</a></li>
          <li><a href="#acara">Ulang Tahun Anak</a></li>
          <li><a href="#acara">Khitanan</a></li>
          <li><a href="#acara">Aqiqah &amp; Tasmiyah</a></li>
          <li><a href="#acara">Acara Lainnya</a></li>
        </ul>
      </div>
      <div>
        <h4>Jelajahi</h4>
        <ul>
          <li><a href="#tema">Katalog Tema</a></li>
          <li><a href="#katalog-video">Video Ucapan</a></li>
          <li><a href="#fitur">Fitur</a></li>
          <li><a href="#harga">Harga</a></li>
          <li><a href="#cara-pesan">Cara Pesan</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>
      <div>
        <h4>Hubungi Kami</h4>
        <ul>
          <li><a data-wa="" href="#kontak">WhatsApp +62 851-2102-4405</a></li>
          <li><a class="js-mailto" href="mailto:janjiara.digital@gmail.com?subject=Pemesanan%20Undangan%20Digital%20JANJIARA" target="_top">janjiara.digital@gmail.com</a></li>
          <li><a class="js-instagram" href="https://www.instagram.com/janjiara.digital?vrfl=dTdtenM5bnc1ZXQw&amp;utm_source=qr" target="_blank" rel="noopener">@janjiara.digital</a></li>
          <li>Jl. Baiduri Bulan No. 8A, RT.006/RW.011, Bidaracina, Jatinegara, Jakarta Timur 13330</li>
          <li>Senin–Sabtu, 09.00–20.00 WIB</li>
        </ul>
        <div class="socials" style="margin-top:18px">
          <a class="js-instagram" href="https://www.instagram.com/janjiara.digital?vrfl=dTdtenM5bnc1ZXQw&amp;utm_source=qr" target="_blank" rel="noopener" aria-label="Instagram JANJIARA"><svg aria-hidden="true"><use href="#i-camera"/></svg></a>
          <a data-wa="" href="#kontak" aria-label="WhatsApp JANJIARA"><svg aria-hidden="true"><use href="#i-message"/></svg></a>
          <a class="js-mailto" href="mailto:janjiara.digital@gmail.com?subject=Pemesanan%20Undangan%20Digital%20JANJIARA" aria-label="Email JANJIARA" target="_top"><svg aria-hidden="true"><use href="#i-mail"/></svg></a>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <span>© <span id="year">2026</span> JANJIARA. Semua hak dilindungi.</span>
      <span>Undangan Digital · Indonesia</span>
    </div>
  </div>
</footer>

<a class="wa-float" data-wa="" href="#kontak" aria-label="Chat WhatsApp JANJIARA">
  <svg aria-hidden="true"><use href="#i-message"/></svg><span>Chat Kami</span>
</a>

<script>
/* =========================================================================
   JANJIARA — Landing Page Script (inline)
   ========================================================================= */

/* =====================================================================
   PENGATURAN KONTAK JANJIARA — ubah di sini bila nomor/akun berganti
   ===================================================================== */
const JANJIARA = {
  waPhone: "6285121024405",                                             // format 62…, tanpa + dan spasi
  waDefaultText: "Saya mau pesan undangan digital 🥰",                  // ISI pesan default (salam & penutup ditambahkan otomatis)
  email: "janjiara.digital@gmail.com",
  // Formulir dikirim ke email lewat layanan FormSubmit (formsubmit.co).
  // Kiriman PERTAMA akan memicu email aktivasi ke alamat di atas — klik "Activate" sekali saja.
  formEndpoint: "https://formsubmit.co/ajax/janjiara.digital@gmail.com",
  instagram: "https://www.instagram.com/janjiara.digital?vrfl=dTdtenM5bnc1ZXQw&utm_source=qr",
  // Domain platform undangan (portal pelanggan /portal/login & preview tema). Katalog video ucapan ada di halaman ini (#katalog-video).
  siteUrl: "https://janjiaraundangan.webinvit.id"
};

/* =====================================================================
   DAFTAR TEMA — isi satu per satu. Kosong = kartu contoh bawaan yang tampil.
   Format satu tema (salin baris contoh, hapus tanda // di depannya, lalu ubah isinya):
     { nama: "Nama Tema", kategori: "wedding", gambar: "URL gambar", preview: "URL preview", deskripsi: "...", badge: "Baru" }
   kategori: wedding | kids | khitan | aqiqah | other
   ===================================================================== */
const SITE_PREVIEW = JANJIARA.siteUrl + "/preview/";
/* Sumber gambar tema. WAJIB URL penuh, bukan path relatif seperti "tema/".
   Dengan path relatif, gambar hanya muncul bila folder tema/ ikut diunggah
   di sebelah file HTML ini — begitu halaman dipasang di subdomain tanpa
   folder itu, semua gambar tema hilang. URL CDN di bawah selalu berhasil
   dari domain atau folder mana pun.
   Memakai "@main": selalu mengikuti isi terbaru repo. Gambar yang baru diunggah
   bisa tertunda sampai ±12 jam karena cache CDN.
   PENTING: repo holis12821/janjiara-tema HARUS tetap publik. jsDelivr tidak
   melayani repo privat sama sekali, jadi begitu repo diprivat seluruh gambar
   tema dan video di halaman ini hilang.
   Sempat dikunci ke tag "@v1.0.0", tetapi saat repo sebentar diprivat jsDelivr
   ikut menyimpan jawaban 404 untuk jalur tag tersebut. Jalur tag baru bisa
   dipakai lagi setelah jsDelivr menyegarkan daftar tag repo (±12-24 jam):
   git tag v1.0.2 && git push origin v1.0.2, lalu ganti "@main" di baris ini
   dan di JJ_VIDEO_CFG menjadi "@v1.0.2" — uji dulu URL-nya sebelum dipasang. */
/* v9: dikunci ke commit kartu tema (21 Okt 2026), jadi tidak terkena cache gambar lama.
   Setelah mengunggah gambar baru ke repo, ganti kode commit di JJ_CDN dengan commit terbaru.
   Bila CDN gagal dimuat, gambar otomatis diambil dari folder lokal (tema/, video/poster/) di hosting. */
const JJ_CDN = "https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@9ecfe8302822fa2c62704edf3e050f0380ff1ed2/";
const TEMA_IMG = JJ_CDN + "tema/";
document.addEventListener("error", function (e) {
  const el = e.target;
  if (!el || el.tagName !== "IMG" || el.dataset.lokal) return;
  const s = el.getAttribute("src") || "";
  if (s.indexOf(JJ_CDN) === 0) { el.dataset.lokal = "1"; el.src = s.slice(JJ_CDN.length); }
}, true);
/* 12 tema pilihan untuk section Tema di landing page. Katalog lengkap ada di halaman #katalog-tema (data: JJ_TEMA). */
const THEMES = [
  { nama: "Adat Jawa", kategori: "wedding", gambar: TEMA_IMG + "adat-jawa.webp", preview: SITE_PREVIEW + "adat-jawa", deskripsi: "", badge: "" },
  { nama: "Sage Green", kategori: "wedding", gambar: TEMA_IMG + "sage-green.webp", preview: SITE_PREVIEW + "sage-green", deskripsi: "", badge: "" },
  { nama: "Almond Flowers", kategori: "wedding", gambar: TEMA_IMG + "almond-flowers.webp", preview: SITE_PREVIEW + "almond-flowers", deskripsi: "", badge: "" },
  { nama: "Java Maroon", kategori: "wedding", gambar: TEMA_IMG + "java-maroon.webp", preview: SITE_PREVIEW + "java-maroon", deskripsi: "", badge: "" },
  { nama: "Dino Birthday", kategori: "kids", gambar: TEMA_IMG + "dino-birthday.webp", preview: SITE_PREVIEW + "dino-birthday", deskripsi: "", badge: "" },
  { nama: "Little Unicorn", kategori: "kids", gambar: TEMA_IMG + "little-unicorn.webp", preview: SITE_PREVIEW + "little-unicorn", deskripsi: "", badge: "" },
  { nama: "Walimatul Khitan", kategori: "khitan", gambar: TEMA_IMG + "walimatul-khitan.webp", preview: SITE_PREVIEW + "walimatul-khitan", deskripsi: "", badge: "" },
  { nama: "Putra Batik", kategori: "khitan", gambar: TEMA_IMG + "putra-batik.webp", preview: SITE_PREVIEW + "putra-batik", deskripsi: "", badge: "" },
  { nama: "Flat Islamic", kategori: "aqiqah", gambar: TEMA_IMG + "flat-islamic.webp", preview: SITE_PREVIEW + "flat-islamic", deskripsi: "", badge: "" },
  { nama: "Tosca Green", kategori: "aqiqah", gambar: TEMA_IMG + "tosca-green.webp", preview: SITE_PREVIEW + "tosca-green", deskripsi: "", badge: "" },
  { nama: "Halal Bihalal", kategori: "other", gambar: TEMA_IMG + "halal-bihalal.webp", preview: SITE_PREVIEW + "halal-bihalal", deskripsi: "", badge: "" },
  { nama: "Graduation Ceremony", kategori: "other", gambar: TEMA_IMG + "graduation-ceremony.webp", preview: SITE_PREVIEW + "graduation-ceremony", deskripsi: "", badge: "" },
  // { nama: "Fohoway", kategori: "wedding", gambar: "https://janjiaraundangan.webinvit.id/themes/fohoway/fohoway.webp", preview: "https://janjiaraundangan.webinvit.id/preview/fohoway", deskripsi: "Elegan dan lembut untuk hari bahagia.", badge: "Terlaris" },
  // { nama: "Cream Flowers", kategori: "wedding", gambar: "https://janjiaraundangan.webinvit.id/themes/cream-flowers/cream-flowers.webp", preview: "https://janjiaraundangan.webinvit.id/preview/cream-flowers", deskripsi: "Nuansa krem dengan bunga halus.", badge: "" },
];

/* Paket yang boleh memakai add-on custom tema. Harga custom tema ditulis di HTML
   (cari "Rp105.000" dan "Rp215.000": daftar add-on, section #custom-tema, FAQ #faq-custom-tema, S&K #sk, pilihan Form Order). */
const CUSTOM_TEMA_PAKET = ["Cerita", "Purnama"];

/* Teks harga: "Rp49.000 (normal Rp59.000)" selama promo, cukup "Rp59.000" setelah promo berakhir */
function hargaTeks(p, sep) {
  if (!p) return "";
  if (p.opening === p.normal) return p.normal;
  return sep ? p.opening + sep + p.normal : p.opening + " (normal " + p.normal + ")";
}
/* Harga paket untuk ringkasan Form Order — ubah bila harga berganti */
const PAKET = {
  Janji:  { opening: "Rp49.000",  normal: "Rp59.000", aktif: "30 hari",  kerja: "Isi & edit sendiri lewat Portal Pelanggan" },
  Cerita: { opening: "Rp69.000",  normal: "Rp79.000", aktif: "90 hari",  kerja: "Dibuatkan oleh admin JANJIARA" },
  Purnama: { opening: "Rp99.000",  normal: "Rp109.000", aktif: "180 hari", kerja: "Dibuatkan oleh admin JANJIARA" }
};

/* Tautan WhatsApp. Memakai wa.me (format resmi) karena api.whatsapp.com/send
   sering gagal membuka aplikasi di sebagian browser mobile. */
function waLink(text) {
  return "https://wa.me/" + JANJIARA.waPhone + "?text=" + encodeURIComponent(text || waPesan(null));
}

/* =====================================================================
   GAYA PESAN WHATSAPP — satu tempat untuk semua tombol
   ---------------------------------------------------------------------
   Semua pesan ke admin memakai susunan yang sama:

       Halo Admin JANJIARA 👋
       <baris kosong>
       <isi pesan>
       <baris kosong>
       Terima kasih 🙏

   Jadi cukup tulis ISI-nya saja di mana pun; salam dan penutup
   ditambahkan otomatis oleh waPesan(). Ubah sapaan/penutup di sini
   sekali, seluruh tombol ikut berubah.

   Penandaan WhatsApp yang dipakai: *tebal* untuk nama paket, tema,
   dan judul bagian. Hindari penanda lain agar tetap rapi di semua HP.
   ===================================================================== */
const WA_GAYA = {
  salam: "Halo Admin JANJIARA \u{1F44B}",
  tutup: "Terima kasih \u{1F64F}"
};
function waPesan(isi) {
  /* null / undefined = baris dilewati (dipakai untuk isian opsional).
     ""               = baris kosong yang disengaja, sebagai pemisah blok.
     Baris kosong beruntun dan di ujung dirapikan otomatis. */
  const mentah = (Array.isArray(isi) ? isi : [isi])
    .filter(function (b) { return b !== null && b !== undefined; })
    .join("\n").split("\n");
  const baris = [];
  mentah.forEach(function (b) {
    b = b.replace(/\s+$/, "");
    if (b === "" && (baris.length === 0 || baris[baris.length - 1] === "")) return;
    baris.push(b);
  });
  while (baris.length && baris[baris.length - 1] === "") baris.pop();
  return WA_GAYA.salam + "\n\n" + (baris.join("\n") || JANJIARA.waDefaultText) + "\n\n" + WA_GAYA.tutup;
}

(function () {
  document.documentElement.classList.remove("no-js");
  const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* WhatsApp links. data-wa berisi ISI pesan saja (boleh beberapa baris dipisah "|");
     salam & penutup ditambahkan waPesan(). data-wa="" memakai pesan default. */
  document.querySelectorAll("[data-wa]").forEach(function (a) {
    a.href = waLink(waPesan(a.dataset.wa ? a.dataset.wa.split("|") : null));
    a.target = "_blank";
    a.rel = "noopener";
  });

  /* Instagram links */
  document.querySelectorAll(".js-instagram").forEach(function (a) { a.href = JANJIARA.instagram; });

  /* Contact form -> email (FormSubmit AJAX), dengan cadangan mailto bila gagal */
  const form = document.getElementById("contact-form");
  if (form) {
    const status = form.querySelector(".form-status");
    const btn = form.querySelector('button[type="submit"]');
    const setStatus = function (msg, kind) {
      status.textContent = msg;
      status.className = "form-status" + (kind ? " is-" + kind : "");
    };
    /* Cadangan bila pengiriman email gagal: buka WhatsApp admin dengan isian form,
       memakai gaya pesan yang sama dengan tombol lain (waPesan).
       Dulu memakai mailto: — sering gagal di HP yang tidak punya aplikasi email. */
    const waFallback = function (d) {
      window.location.href = waLink(waPesan([
        "Saya mengisi form kontak di website. Berikut datanya:",
        "",
        "*Data pemesan*",
        "\u2022 Nama: " + d.nama,
        "\u2022 WhatsApp: " + d.whatsapp,
        d.email ? "\u2022 Email: " + d.email : null,
        "",
        "*Rencana acara*",
        "\u2022 Jenis acara: " + d.acara,
        d.paket ? "\u2022 Paket: " + (PAKET[d.paket] ? "*Paket " + d.paket + "*" : d.paket) : null,
        d.tanggal ? "\u2022 Tanggal acara: " + fmtDate(d.tanggal) : null,
        "",
        "*Pesan*",
        d.pesan
      ]));
    };
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      let ok = true;
      form.querySelectorAll("[required]").forEach(function (f) {
        const bad = !f.value.trim();
        f.setAttribute("aria-invalid", String(bad));
        if (bad) ok = false;
      });
      const emailField = form.elements.email;
      if (emailField.value && !emailField.checkValidity()) { emailField.setAttribute("aria-invalid", "true"); ok = false; }
      if (!ok) { setStatus("Mohon lengkapi kolom yang wajib diisi.", "error"); return; }
      if (form.elements._honey.value) return; // bot

      const d = {
        nama: form.elements.nama.value.trim(),
        whatsapp: form.elements.whatsapp.value.trim(),
        email: form.elements.email.value.trim(),
        acara: form.elements.acara.value,
        paket: form.elements.paket.value,
        tanggal: form.elements.tanggal.value,
        pesan: form.elements.pesan.value.trim()
      };
      const payload = {
        "Nama": d.nama, "WhatsApp": d.whatsapp, "Email": d.email || "-", "Jenis acara": d.acara,
        "Paket": d.paket, "Tanggal acara": d.tanggal || "-", "Pesan": d.pesan,
        _subject: "Pesanan baru JANJIARA — " + d.acara + " (" + d.nama + ")",
        _template: "table", _captcha: "false"
      };
      if (d.email) payload._replyto = d.email;

      btn.disabled = true;
      setStatus("Mengirim pesan…");
      fetch(JANJIARA.formEndpoint, {
        method: "POST",
        headers: { "Content-Type": "application/json", "Accept": "application/json" },
        body: JSON.stringify(payload)
      }).then(function (r) { return r.json().then(function (j) { return { ok: r.ok, j: j }; }); })
        .then(function (res) {
          if (res.ok && String(res.j.success) === "true") {
            setStatus("Terima kasih! Pesan Anda sudah terkirim. Kami akan menghubungi Anda melalui WhatsApp.", "ok");
            form.reset();
          } else { throw new Error(res.j && res.j.message || "gagal"); }
        })
        .catch(function () {
          setStatus("Pesan belum bisa dikirim otomatis. Kami buka WhatsApp admin sebagai gantinya…", "error");
          waFallback(d);
        })
        .finally(function () { btn.disabled = false; });
    });
  }

  /* Year */
  document.getElementById("year").textContent = new Date().getFullYear();

  /* Sticky header shadow + active link */
  const header = document.querySelector(".site-header");
  const onScroll = function () { header.classList.toggle("is-scrolled", window.scrollY > 8); };
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });

  /* Mobile menu */
  const toggle = document.querySelector(".nav__toggle");
  const menu = document.getElementById("menu");
  toggle.addEventListener("click", function () {
    const open = toggle.getAttribute("aria-expanded") === "true";
    toggle.setAttribute("aria-expanded", String(!open));
    toggle.setAttribute("aria-label", open ? "Buka menu" : "Tutup menu");
    menu.classList.toggle("is-open", !open);
  });
  menu.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", function () {
      toggle.setAttribute("aria-expanded", "false");
      toggle.setAttribute("aria-label", "Buka menu");
      menu.classList.remove("is-open");
    });
  });

  /* Active nav link on scroll */
  const links = Array.from(menu.querySelectorAll('a[href^="#"]:not(.btn)'));
  if ("IntersectionObserver" in window) {
    const spy = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          links.forEach(function (l) { l.classList.toggle("is-active", l.getAttribute("href") === "#" + e.target.id); });
        }
      });
    }, { rootMargin: "-45% 0px -50% 0px" });
    links.forEach(function (l) { const s = document.querySelector(l.getAttribute("href")); if (s) spy.observe(s); });
  }

  /* Platform links (tombol Portal Customer → /portal/login) */
  document.querySelectorAll(".js-site").forEach(function (a) { a.href = JANJIARA.siteUrl + a.dataset.path; });

  /* Theme catalog from THEMES data (replaces sample cards when filled) */
  const TAGS = { wedding: ["tag--wedding", "Pernikahan"], kids: ["tag--kids", "Ulang Tahun"], khitan: ["tag--khitan", "Khitanan"],
                 aqiqah: ["tag--aqiqah", "Aqiqah"], other: ["tag--other", "Acara Lain"] };
  const ORDER_CAT = { wedding: "wedding", kids: "birthday", khitan: "khitan", aqiqah: "aqiqah", other: "umum" };
  const esc = function (s) { return String(s || "").replace(/[&<>"']/g, function (c) { return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]; }); };
  if (Array.isArray(THEMES) && THEMES.length) {
    const grid = document.getElementById("themes");
    grid.innerHTML = THEMES.map(function (t) {
      const tag = TAGS[t.kategori] || TAGS.other;
      const pesan = "#order?tema=" + encodeURIComponent(t.nama) + "&kategori=" + (ORDER_CAT[t.kategori] || "umum");
      return '<article class="theme-card reveal is-visible" data-cat="' + esc(t.kategori || "other") + '">' +
        '<div class="theme-card__img"><img src="' + esc(t.gambar) + '" alt="Tema ' + esc(t.nama) + '" loading="lazy"></div>' +
        '<div class="theme-card__body"><div class="theme-card__top"><h3>' + esc(t.nama) + '</h3><span class="tag ' + tag[0] + '">' + tag[1] + '</span></div>' +
        (t.deskripsi ? '<p>' + esc(t.deskripsi) + '</p>' : '') +
        (t.badge ? '<p><span class="badge">' + esc(t.badge) + '</span></p>' : '') +
        '<div class="theme-card__actions">' +
        (t.preview ? '<a class="btn btn--outline btn--sm" href="' + esc(t.preview) + '" target="_blank" rel="noopener">Preview</a>' : '') +
        '<a class="btn btn--primary btn--sm" href="' + pesan + '">Pesan</a></div></div></article>';
    }).join("");
  }

  /* Theme filter */
  const buttons = document.querySelectorAll(".filter-btn");
  function applyFilter(cat) {
    buttons.forEach(function (b) { b.setAttribute("aria-pressed", String(b.dataset.filter === cat)); });
    document.querySelectorAll("#themes .theme-card").forEach(function (c) { c.hidden = !(cat === "all" || c.dataset.cat === cat); if (!c.hidden) c.classList.add("is-visible"); });
  }
  buttons.forEach(function (b) { b.addEventListener("click", function () { applyFilter(b.dataset.filter); }); });
  document.querySelectorAll("[data-filter-link]").forEach(function (a) {
    a.addEventListener("click", function () { applyFilter(a.dataset.filterLink); });
  });

  /* Reveal on scroll */
  const reveals = document.querySelectorAll(".reveal");
  if (reduce || !("IntersectionObserver" in window)) {
    reveals.forEach(function (el) { el.classList.add("is-visible"); });
  } else {
    const io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add("is-visible"); io.unobserve(e.target); } });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { io.observe(el); });
  }

  /* Hero invitation: rotates through event types + live countdown */
  const EVENTS = [
    { label: "The Wedding of", name1: "Rania", amp: "&", name2: "Dimas", date: "Sabtu, 12 Desember 2026", place: "Gedung Serbaguna Melati, Jakarta", at: "2026-12-12T10:00:00+07:00" },
    { label: "Aqiqah & Tasmiyah", name1: "Aisyah", amp: "", name2: "Humaira", date: "Ahad, 20 Desember 2026", place: "Kediaman Keluarga, Bandung", at: "2026-12-20T09:00:00+07:00" },
    { label: "Tasyakuran Khitan", name1: "Arka", amp: "", name2: "Pratama", date: "Ahad, 27 Desember 2026", place: "Kediaman Keluarga, Surabaya", at: "2026-12-27T10:00:00+07:00" },
    { label: "Ulang Tahun ke-5", name1: "Kenzo", amp: "", name2: "", date: "Sabtu, 9 Januari 2027", place: "Taman Bermain Ceria, Bekasi", at: "2027-01-09T15:00:00+07:00" }
  ];
  const screen = document.getElementById("hero-invite");
  const f = function (k) { return screen.querySelector('[data-f="' + k + '"]'); };
  let idx = 0;
  function render(ev) {
    ["label", "name1", "amp", "name2", "date", "place"].forEach(function (k) {
      const el = f(k);
      el.textContent = ev[k];
      el.style.display = ev[k] ? "" : "none";
    });
    tick();
  }
  function tick() {
    const diff = Math.max(0, new Date(EVENTS[idx].at) - new Date());
    const d = Math.floor(diff / 864e5), h = Math.floor(diff % 864e5 / 36e5), m = Math.floor(diff % 36e5 / 6e4);
    screen.querySelector('[data-cd="d"]').textContent = String(d).padStart(2, "0");
    screen.querySelector('[data-cd="h"]').textContent = String(h).padStart(2, "0");
    screen.querySelector('[data-cd="m"]').textContent = String(m).padStart(2, "0");
  }
  render(EVENTS[0]);
  setInterval(tick, 30000);
  if (!reduce) {
    screen.style.transition = "opacity .5s ease";
    setInterval(function () {
      screen.style.opacity = 0;
      setTimeout(function () { idx = (idx + 1) % EVENTS.length; render(EVENTS[idx]); screen.style.opacity = 1; }, 500);
    }, 4200);
  }

  /* ===================== FORM ORDER (view #order) ===================== */
  const orderView = document.getElementById("order");
  const oform = document.getElementById("order-form");
  const CAT_LABEL = {};
  oform.querySelectorAll('input[name="kategori"]').forEach(function (r) { CAT_LABEL[r.value] = r.parentElement.textContent.trim(); });

  function parseOrderHash() {
    const q = location.hash.split("?")[1] || "";
    const p = {};
    q.split("&").forEach(function (kv) { if (!kv) return; const i = kv.indexOf("="); p[decodeURIComponent(kv.slice(0, i))] = decodeURIComponent(kv.slice(i + 1).replace(/\+/g, " ")); });
    return p;
  }
  function setCategory(cat) {
    oform.querySelectorAll(".order-group").forEach(function (g) {
      const on = !!cat && g.dataset.show.split(" ").indexOf(cat) > -1;
      g.hidden = !on;
      g.querySelectorAll("input,select,textarea").forEach(function (el) { el.disabled = !on; });
    });
    oform.querySelector(".js-cat-hint").hidden = !!cat;
    const lab = { wedding: "Akad Nikah", lamaran: "Lamaran", aqiqah: "Aqiqah & Tasmiyah", khitan: "Tasyakuran Khitan", birthday: "Pesta Ulang Tahun", graduation: "Syukuran Purnabakti", opening: "Grand Opening", party: "Makan Malam" }[cat];
    if (lab && !oform.elements.acara1.value) oform.elements.acara1.placeholder = "Contoh: " + lab;
    updateSummary();
  }
  function fmtDate(v) {
    if (!v) return "—";
    const d = new Date(v);
    return isNaN(d) ? v : d.toLocaleDateString("id-ID", { weekday: "long", day: "numeric", month: "long", year: "numeric" });
  }
  function updateSummary() {
    const cat = (oform.querySelector('input[name="kategori"]:checked') || {}).value;
    const pk = (oform.querySelector('input[name="paket"]:checked') || {}).value;
    const set = function (k, v) { oform.parentElement.querySelector('[data-sum="' + k + '"]').textContent = v || "—"; };
    set("kategori", cat ? CAT_LABEL[cat] : "");
    set("paket", pk);
    set("harga", pk ? hargaTeks(PAKET[pk]) : "");
    set("tema", oform.elements.tema.value.trim());
    /* Custom tema khusus Cerita & Purnama: dinonaktifkan (dan dikosongkan) saat Paket Janji dipilih. */
    const ct = oform.elements.custom_tema;
    const ctOk = !pk || CUSTOM_TEMA_PAKET.indexOf(pk) > -1;
    if (!ctOk) ct.value = "";
    ct.disabled = !ctOk;
    oform.querySelector(".js-custom-hint").firstChild.textContent = ctOk
      ? "Custom tema dibayar penuh di awal, terpisah dari DP paket, dan tidak ikut harga opening. Admin memastikan kategori setelah melihat file Anda. "
      : "Custom tema hanya tersedia di Paket Cerita & Purnama. Pilih salah satunya bila ingin desain tema sendiri. ";
    set("custom", ct.value ? ct.options[ct.selectedIndex].text.replace(/^Ya — /, "") : "");
    set("waktu", oform.elements.waktu1.value ? fmtDate(oform.elements.waktu1.value) : "");
    /* Tautan Drive bisa sangat panjang; di ringkasan cukup ditandai "Terlampir". */
    set("drive", oform.elements.drive.value.trim() ? "Terlampir" : "");
    syncOrderGate();
  }
  /* ---- Status tombol "Kirim Form Order" -------------------------------
     Tombol nonaktif selama masih ada kolom WAJIB (*) yang kosong atau
     centang persetujuan belum diisi. Kolom opsional tidak ikut dihitung. */
  const obtn = oform.querySelector(".order-submit");
  const ogate = oform.querySelector(".order-gate");
  let oTouched = false;   // kolom baru ditandai merah setelah tombol pernah ditekan

  function fieldFilled(el) {
    if (el.type === "radio") return !!oform.querySelector('input[name="' + el.name + '"]:checked');
    if (el.type === "checkbox") return el.checked;
    return !!el.value.trim() && el.checkValidity();
  }
  /* Kolom wajib yang masih kosong. Grup kategori yang tersembunyi sudah
     di-disable oleh setCategory(), jadi otomatis tidak dihitung. */
  function missingRequired() {
    const miss = [], seen = {};
    oform.querySelectorAll("[required]").forEach(function (el) {
      if (el.disabled) return;
      if (el.type === "radio") { if (seen[el.name]) return; seen[el.name] = true; }
      if (!fieldFilled(el)) miss.push(el);
    });
    return miss;
  }
  function syncOrderGate() {
    const miss = missingRequired();
    const agree = oform.elements.setuju.checked;
    const other = miss.filter(function (el) { return el.name !== "setuju"; });
    obtn.disabled = miss.length > 0;
    if (!miss.length) {
      ogate.textContent = "Semua kolom wajib sudah lengkap — silakan kirim form order.";
      ogate.className = "order-gate is-ready";
    } else {
      ogate.className = "order-gate";
      if (!other.length) ogate.textContent = "Centang persetujuan di atas untuk mengaktifkan tombol kirim.";
      else ogate.textContent = "Masih ada " + other.length + " kolom wajib (*) yang belum diisi" +
        (agree ? "." : ", dan persetujuan belum dicentang.");
    }
    /* Hapus tanda merah begitu kolomnya sudah benar */
    if (oTouched) oform.querySelectorAll('[aria-invalid="true"]').forEach(function (el) {
      if (fieldFilled(el)) el.setAttribute("aria-invalid", "false");
    });
  }

  oform.addEventListener("change", function (e) { if (e.target.name === "kategori") setCategory(e.target.value); else updateSummary(); });
  oform.addEventListener("input", function () { updateSummary(); });
  setCategory("");

  function prefill() {
    const p = parseOrderHash();
    if (p.kategori) { const kat = ({ kids: "birthday", other: "umum" })[p.kategori] || p.kategori; const r = oform.querySelector('input[name="kategori"][value="' + kat + '"]'); if (r) { r.checked = true; setCategory(kat); } }
    if (p.paket) { const r = oform.querySelector('input[name="paket"][value="' + p.paket + '"]'); if (r) r.checked = true; }
    if (p.tema) oform.elements.tema.value = p.tema;
    if (p.custom === "ada") oform.elements.custom_tema.selectedIndex = 1;
    if (p.custom === "baru") oform.elements.custom_tema.selectedIndex = 2;
    updateSummary();
  }

  /* View routing: #order... shows the Form Order page, any other hash shows the landing page */
  const success = orderView.querySelector(".order-success");
  function route(fromLoad) {
    toggle.setAttribute("aria-expanded", "false"); toggle.setAttribute("aria-label", "Buka menu"); menu.classList.remove("is-open");
    const isOrder = location.hash.indexOf("#order") === 0;
    const wasOrder = document.body.classList.contains("is-order");
    document.body.classList.toggle("is-order", isOrder);
    orderView.hidden = !isOrder;
    if (isOrder) {
      if (!wasOrder) {   /* kembalikan form ke keadaan normal setelah pernah sukses kirim */
        oform.hidden = false;
        orderView.querySelector(".order-summary").hidden = false;
        success.hidden = true;
      }
      if (!wasOrder || fromLoad) window.scrollTo(0, 0);
      prefill();
      document.title = "Form Order — JANJIARA";
    } else {
      document.title = DEFAULT_TITLE;
      if (wasOrder || fromLoad) {
        const id = location.hash.slice(1);
        const el = id && id !== "top" ? document.getElementById(id) : null;
        requestAnimationFrame(function () { el ? el.scrollIntoView() : window.scrollTo(0, 0); });
      }
    }
  }
  const DEFAULT_TITLE = document.title;
  /* Tautan ke #faq-custom-tema membuka (expand) FAQ-nya. */
  function openFaqFromHash() {
    const d = document.getElementById(location.hash.slice(1).split("?")[0]);
    if (d && d.tagName === "DETAILS") d.open = true;
  }
  window.addEventListener("hashchange", openFaqFromHash);
  openFaqFromHash();
  window.addEventListener("hashchange", function () { route(false); });
  route(true);

  /* Submit: kirim salinan ke email (FormSubmit), lalu konfirmasi via WhatsApp.
     PENTING: tombol WhatsApp TIDAK lagi bergantung pada keberhasilan email.
     Dulu, bila FormSubmit gagal (belum diaktivasi, offline, atau diblokir CORS
     saat file dibuka langsung tanpa server), halaman sukses + tombol WhatsApp
     tidak pernah muncul sehingga data pesanan tidak sampai ke admin. */
  const ostatus = oform.querySelector(".order-status");
  const owa = orderView.querySelector(".js-order-wa");
  const onote = orderView.querySelector(".js-order-note");
  /* Batas aman panjang pesan yang dititipkan lewat tautan WhatsApp.
     Diukur 18 Okt 2026: form pernikahan terisi PENUH (2 acara, custom tema, link
     Google Drive, amplop, kado, catatan, kode promo) menghasilkan ~1.680 karakter.
     Dengan 1700 pesan itu terpotong, jadi dinaikkan ke 2200 agar muat utuh plus
     ruang untuk nama/alamat/catatan yang lebih panjang. Setelah di-encode, URL
     terburuknya ~3.500 karakter — masih aman untuk browser dan aplikasi WhatsApp.
     Pemotongan tetap jalan sebagai pengaman bila pelanggan menulis catatan panjang. */
  const WA_MAX = 2200;

  /* Pesan Form Order: dikelompokkan per bagian form, dengan judul bagian ditebalkan.
     Contoh hasil:
         Halo Admin JANJIARA 👋
         Saya sudah mengisi Form Order. Berikut rinciannya:
         *Data pemesan*
         • Nama pemesan: Budi Santoso
         ...
         Terima kasih 🙏                                                    */
  function orderSummaryText(baris) {
    const isi = ["Saya sudah mengisi Form Order. Berikut rinciannya:"];
    let bagian = "";
    baris.forEach(function (r) {
      if (r.label === "Setuju ketentuan" || r.label.charAt(0) === "_") return;
      if (r.bagian !== bagian) { bagian = r.bagian; isi.push("", "*" + bagian + "*"); }
      isi.push("\u2022 " + r.label + ": " + r.nilai);
    });
    isi.push("", "Mohon dicek dan dikonfirmasi ya 🤗");

    /* Tautan WhatsApp yang terlalu panjang bisa gagal dibuka / terpotong di aplikasi.
       Dipotong di batas baris utuh, lalu salam & penutup tetap ditambahkan waPesan(). */
    let badan = isi.join("\n");
    const batas = WA_MAX - 90;   /* sisakan ruang untuk salam & penutup */
    if (badan.length > batas) {
      badan = badan.slice(0, batas).replace(/\n[^\n]*$/, "") +
        "\n\n(Sisa detail saya kirim menyusul di chat ini.)";
    }
    return waPesan(badan);
  }

  function showOrderSuccess(note) {
    oform.hidden = true;
    orderView.querySelector(".order-summary").hidden = true;
    success.hidden = false;
    onote.textContent = note || "";
    onote.hidden = !note;
    window.scrollTo(0, orderView.querySelector(".order-body").offsetTop - 80);
  }

  oform.addEventListener("submit", function (e) {
    e.preventDefault();
    oTouched = true;
    let firstBad = null;
    oform.querySelectorAll("[required]").forEach(function (el) {
      if (el.disabled) return;
      let bad;
      if (el.type === "radio") bad = !oform.querySelector('input[name="' + el.name + '"]:checked');
      else if (el.type === "checkbox") bad = !el.checked;
      else bad = !el.value.trim();
      el.setAttribute("aria-invalid", String(bad));
      if (bad && !firstBad) firstBad = el;
    });
    /* Kolom opsional tidak memblokir tombol, tapi formatnya tetap diperiksa di sini */
    const FORMAT_LABEL = { email: "Email", maps1: "Link Google Maps", drive: "Link Google Drive" };
    let badFormat = false;
    Object.keys(FORMAT_LABEL).forEach(function (n) {
      const el = oform.elements[n];
      if (el.value && !el.checkValidity()) { el.setAttribute("aria-invalid", "true"); badFormat = true; firstBad = firstBad || el; }
    });
    if (firstBad) {
      ostatus.textContent = (!badFormat || !FORMAT_LABEL[firstBad.name])
        ? "Mohon lengkapi kolom bertanda * yang masih kosong."
        : "Format " + FORMAT_LABEL[firstBad.name] + " belum benar. Mohon diperbaiki atau dikosongkan.";
      ostatus.className = "form-status order-status is-error";
      syncOrderGate();
      (firstBad.closest(".order-card") || firstBad).scrollIntoView({ behavior: reduce ? "auto" : "smooth", block: "start" });
      return;
    }
    if (oform.elements._honey.value) return;

    const data = {};
    const baris = [];   /* sama isinya dengan data, tapi ingat bagian/fieldset-nya -> dipakai pesan WhatsApp */
    oform.querySelectorAll("input,select,textarea").forEach(function (el) {
      if (el.disabled || !el.dataset.label) return;
      if ((el.type === "radio" || el.type === "checkbox") && !el.checked) return;
      let v = el.value.trim();
      if (!v) return;
      if (el.name === "kategori") v = CAT_LABEL[v] || v;
      if (el.type === "datetime-local" || el.type === "date") v = fmtDate(v) + (el.type === "datetime-local" ? ", " + el.value.split("T")[1] : "");
      data[el.dataset.label] = v;
      const fs = el.closest("fieldset"), lg = fs && fs.querySelector("legend");
      baris.push({ bagian: lg ? lg.textContent.replace(/^\s*\d+\s*/, "").trim() : "Lainnya",
                   label: el.dataset.label, nilai: v });
    });
    const pk = data["Paket"];
    if (pk && PAKET[pk]) {
      data[PAKET[pk].opening !== PAKET[pk].normal ? "Harga (opening / normal)" : "Harga"] = hargaTeks(PAKET[pk], " / ");
      /* sisipkan harga & masa aktif tepat di bawah baris Paket */
      const i = baris.findIndex(function (r) { return r.label === "Paket"; });
      if (i > -1) baris[i].nilai = "*Paket " + pk + "*";
      if (i > -1) baris.splice(i + 1, 0,
        { bagian: baris[i].bagian, label: "Harga", nilai: hargaTeks(PAKET[pk]) },
        { bagian: baris[i].bagian, label: "Masa aktif", nilai: PAKET[pk].aktif });
    }
    const payload = Object.assign({}, data, {
      _subject: "Form Order JANJIARA \u2014 " + (data["Kategori acara"] || "") + " \u2014 " + (data["Nama pemesan"] || ""),
      _template: "table", _captcha: "false"
    });
    if (data["Email"]) payload._replyto = data["Email"];

    /* Siapkan tautan WhatsApp lebih dulu supaya selalu tersedia apa pun hasil email */
    owa.href = waLink(orderSummaryText(baris));
    owa.target = "_blank";
    owa.rel = "noopener";

    obtn.disabled = true;
    ostatus.textContent = "Mengirim data pesanan\u2026";
    ostatus.className = "form-status order-status";

    const ctrl = ("AbortController" in window) ? new AbortController() : null;
    const timer = setTimeout(function () { if (ctrl) ctrl.abort(); }, 12000);   /* jangan sampai menggantung */
    fetch(JANJIARA.formEndpoint, {
      method: "POST", headers: { "Content-Type": "application/json", "Accept": "application/json" },
      body: JSON.stringify(payload), signal: ctrl ? ctrl.signal : undefined
    }).then(function (r) { return r.json().catch(function () { return {}; }).then(function (j) { return { ok: r.ok, j: j }; }); })
      .then(function (res) {
        if (!(res.ok && String(res.j.success) === "true")) throw new Error(res.j.message || "gagal");
        showOrderSuccess("");
      })
      .catch(function (err) {
        console.warn("[JANJIARA] Salinan email tidak terkirim:", (err && err.message) || err);
        showOrderSuccess("Catatan: salinan email otomatis belum terkirim. Mohon tekan tombol WhatsApp di atas agar data pesanan Anda langsung masuk ke admin.");
      })
      .finally(function () { clearTimeout(timer); obtn.disabled = false; syncOrderGate(); });
  });
})();
</script>
<script>
/* =====================================================================
   KATALOG TEMA + PEMILIH PAKET (v6) — blok terpisah, logika lama tidak diubah.
   Format pesan WhatsApp:
     Halo Admin JANJIARA
     Saya mau order paket *Paket Janji* Tema *Adat Jawa*
   ===================================================================== */
const JJ_CATALOG = {
  adminName: "Admin JANJIARA",   // sapaan di awal pesan WhatsApp
  imageDir: TEMA_IMG,            // sumber gambar tema (lihat TEMA_IMG di atas)
  pageSize: 24                   // jumlah kartu per "Muat lebih banyak"
};
/* Data tema: ["slug", "kategori", "sub-kategori"] — slug = nama file gambar (huruf kecil, tanda hubung tetap). */
const JJ_TEMA = [
  ["aceh-jawa","wedding","Pernikahan"],
  ["adat-aceh","wedding","Pernikahan"],
  ["adat-batak","wedding","Pernikahan"],
  ["adat-betawi","wedding","Pernikahan"],
  ["adat-bugis-flat","wedding","Pernikahan"],
  ["adat-jawa","wedding","Pernikahan"],
  ["adat-karo","wedding","Pernikahan"],
  ["adat-makassar","wedding","Pernikahan"],
  ["adat-minang","wedding","Pernikahan"],
  ["adat-papua","wedding","Pernikahan"],
  ["adat-rote","wedding","Pernikahan"],
  ["adat-selaso","wedding","Pernikahan"],
  ["adat-sumatera","wedding","Pernikahan"],
  ["adat-sunda","wedding","Pernikahan"],
  ["aesthetic-java","wedding","Pernikahan"],
  ["aesthetic-victorian","wedding","Pernikahan"],
  ["alexandra","other","Party & Dinner"],
  ["almond-flowers","wedding","Pernikahan"],
  ["angela","wedding","Pernikahan"],
  ["apoteker","other","Umum & Seminar"],
  ["apresiasi-kelulusan","other","Sekolah & Wisuda"],
  ["argentina-birthday","kids","Ulang Tahun"],
  ["arminareka","other","Syukuran & Islami"],
  ["artichoke","wedding","Pernikahan"],
  ["astronout","aqiqah","Aqiqah"],
  ["auntumn","wedding","Pernikahan"],
  ["avengers","kids","Ulang Tahun"],
  ["aysha","wedding","Pernikahan"],
  ["azureish-white","wedding","Pernikahan"],
  ["baby-blue","kids","Ulang Tahun"],
  ["baby-boss","kids","Ulang Tahun"],
  ["baby-elephant","kids","Ulang Tahun"],
  ["baby-giggles","other","Umum & Seminar"],
  ["baby-shark","kids","Ulang Tahun"],
  ["bali-land","other","Umum & Seminar"],
  ["bali-paper-ink","other","Umum & Seminar"],
  ["banjar-jawa","wedding","Pernikahan"],
  ["banjar-kuning","wedding","Pernikahan"],
  ["bare-bears","kids","Ulang Tahun"],
  ["bataknese","wedding","Pernikahan"],
  ["batik-ntt","other","Umum & Seminar"],
  ["batik-nusantara","other","Umum & Seminar"],
  ["be-the-light","other","Natal & Tahun Baru"],
  ["beach-club","other","Umum & Seminar"],
  ["beach-of-happiness","kids","Ulang Tahun"],
  ["beautiful-bali","other","Umum & Seminar"],
  ["beautiful-flower","wedding","Pernikahan"],
  ["berinovasi","other","Sekolah & Wisuda"],
  ["betawi-minang","wedding","Pernikahan"],
  ["betawi-vintage","wedding","Pernikahan"],
  ["bincang-seru","other","Umum & Seminar"],
  ["bird-charm","other","Umum & Seminar"],
  ["birthday-beach","kids","Ulang Tahun"],
  ["birthday-bus","kids","Ulang Tahun"],
  ["birthday-girl","kids","Ulang Tahun"],
  ["biru-jawa","wedding","Pernikahan"],
  ["black-and-white","wedding","Pernikahan"],
  ["black-birthday","other","Party & Dinner"],
  ["black-brown","other","Sekolah & Wisuda"],
  ["black-coral","wedding","Pernikahan"],
  ["black-glitter","kids","Ulang Tahun"],
  ["black-gold","other","Natal & Tahun Baru"],
  ["black-java","wedding","Pernikahan"],
  ["blue-casanova","wedding","Pernikahan"],
  ["blue-floral","wedding","Pernikahan"],
  ["blue-gold","other","Umum & Seminar"],
  ["blue-graduation","other","Sekolah & Wisuda"],
  ["blue-javanese","wedding","Pernikahan"],
  ["blue-metalic","wedding","Pernikahan"],
  ["blue-night","kids","Ulang Tahun"],
  ["blue-roses","wedding","Pernikahan"],
  ["blue-school","other","Umum & Seminar"],
  ["blue-seventeen","other","Party & Dinner"],
  ["blue-watercolor","wedding","Pernikahan"],
  ["blue-wedding","wedding","Pernikahan"],
  ["blue-white","wedding","Pernikahan"],
  ["boboiboy","kids","Ulang Tahun"],
  ["boho-terracotta","wedding","Pernikahan"],
  ["boho-wedding","wedding","Pernikahan"],
  ["bonvoyage","other","Sekolah & Wisuda"],
  ["brown-flowers","wedding","Pernikahan"],
  ["brown-leaves","wedding","Pernikahan"],
  ["budaya-aceh","wedding","Pernikahan"],
  ["budaya-batak","other","Umum & Seminar"],
  ["bugis-culture","wedding","Pernikahan"],
  ["bugis-maroon","wedding","Pernikahan"],
  ["bugis-minang","wedding","Pernikahan"],
  ["bugis-pink","wedding","Pernikahan"],
  ["bunny-pastel","kids","Ulang Tahun"],
  ["camelia","wedding","Pernikahan"],
  ["candlelit","other","Natal & Tahun Baru"],
  ["carolina-blue","kids","Ulang Tahun"],
  ["caroline","other","Umum & Seminar"],
  ["casanova","wedding","Pernikahan"],
  ["cathrine","wedding","Pernikahan"],
  ["ceremony","other","Umum & Seminar"],
  ["charm-birthday","other","Party & Dinner"],
  ["cherry-blossom","other","Party & Dinner"],
  ["chinese-wedding","wedding","Pernikahan"],
  ["christmas-party","other","Natal & Tahun Baru"],
  ["christmas-watercolor","other","Natal & Tahun Baru"],
  ["cinnamoroll","kids","Ulang Tahun"],
  ["classic-blue","wedding","Pernikahan"],
  ["classic-parthenon","wedding","Pernikahan"],
  ["classic-wedding","wedding","Pernikahan"],
  ["cocomelon","kids","Ulang Tahun"],
  ["colored-beach","wedding","Pernikahan"],
  ["conference","other","Umum & Seminar"],
  ["content-creator","other","Umum & Seminar"],
  ["crayola-flowers","wedding","Pernikahan"],
  ["cream-cute","wedding","Pernikahan"],
  ["cream-japan","wedding","Pernikahan"],
  ["cream-lampung","wedding","Pernikahan"],
  ["cream-purple","wedding","Pernikahan"],
  ["creamy-coral","wedding","Pernikahan"],
  ["cristian","other","Umum & Seminar"],
  ["cross-break","other","Umum & Seminar"],
  ["cute-java","wedding","Pernikahan"],
  ["daisy-gray","wedding","Pernikahan"],
  ["dark-brown","wedding","Pernikahan"],
  ["dark-green","other","Syukuran & Islami"],
  ["dark-purple","other","Syukuran & Islami"],
  ["dayak-java","wedding","Pernikahan"],
  ["dayak-jawa","wedding","Pernikahan"],
  ["dayak-kalteng","wedding","Pernikahan"],
  ["dayak-toraja","wedding","Pernikahan"],
  ["dies-natalis","other","Umum & Seminar"],
  ["dino-birthday","kids","Ulang Tahun"],
  ["diploma","other","Umum & Seminar"],
  ["dolphin-green","wedding","Pernikahan"],
  ["dried-leaves-2","wedding","Pernikahan"],
  ["eid-mubarak","other","Syukuran & Islami"],
  ["elegant-aceh","wedding","Pernikahan"],
  ["elegant-blue","wedding","Pernikahan"],
  ["elegant-graduation","other","Sekolah & Wisuda"],
  ["elegant-islamic","khitan","Khitanan"],
  ["elegant-red","wedding","Pernikahan"],
  ["elegant-wedding","wedding","Pernikahan"],
  ["emily","wedding","Pernikahan"],
  ["engagement","wedding","Pernikahan"],
  ["enter-house","other","Umum & Seminar"],
  ["esther","wedding","Pernikahan"],
  ["ethnic-pattern","wedding","Pernikahan"],
  ["event-launching","other","Umum & Seminar"],
  ["exclusive-ramadhan","other","Syukuran & Islami"],
  ["fairy-birthday","kids","Ulang Tahun"],
  ["fairy-purple","kids","Ulang Tahun"],
  ["fairy-tail","kids","Ulang Tahun"],
  ["feminime-javanese","wedding","Pernikahan"],
  ["flamingo","kids","Ulang Tahun"],
  ["flat-islamic","aqiqah","Aqiqah"],
  ["floral-purple","wedding","Pernikahan"],
  ["food-business","other","Umum & Seminar"],
  ["forever-journey","wedding","Pernikahan"],
  ["frozen","kids","Ulang Tahun"],
  ["galaxy","kids","Ulang Tahun"],
  ["galungan","wedding","Pernikahan"],
  ["gold-black-silver","wedding","Pernikahan"],
  ["gold-christmas","other","Natal & Tahun Baru"],
  ["gold-gathering","other","Party & Dinner"],
  ["gold-islamic","other","Syukuran & Islami"],
  ["gold-marble","other","Umum & Seminar"],
  ["golden-blue","other","Party & Dinner"],
  ["golden-watercolor","wedding","Pernikahan"],
  ["golf-birthday","kids","Ulang Tahun"],
  ["gradient-black","other","Umum & Seminar"],
  ["graduation","other","Umum & Seminar"],
  ["graduation-ceremony","other","Sekolah & Wisuda"],
  ["grand-launching","other","Umum & Seminar"],
  ["grand-opening","other","Umum & Seminar"],
  ["great-talents","other","Sekolah & Wisuda"],
  ["green-aniv","other","Umum & Seminar"],
  ["green-bunex","other","Umum & Seminar"],
  ["green-floral","wedding","Pernikahan"],
  ["green-garden","other","Umum & Seminar"],
  ["green-hospital","other","Umum & Seminar"],
  ["green-leaves","other","Umum & Seminar"],
  ["green-mandala","other","Umum & Seminar"],
  ["green-motion","wedding","Pernikahan"],
  ["green-passport","wedding","Pernikahan"],
  ["green-pink","wedding","Pernikahan"],
  ["green-roses","wedding","Pernikahan"],
  ["green-school","other","Sekolah & Wisuda"],
  ["green-tropical","wedding","Pernikahan"],
  ["green-watercolor","wedding","Pernikahan"],
  ["halal-bihalal","other","Syukuran & Islami"],
  ["hand-drawn","wedding","Pernikahan"],
  ["hangout","other","Umum & Seminar"],
  ["happy-dino","kids","Ulang Tahun"],
  ["heroes","other","Umum & Seminar"],
  ["heroes-graduation","other","Umum & Seminar"],
  ["hogwarts","kids","Ulang Tahun"],
  ["hot-wheels","kids","Ulang Tahun"],
  ["ice-silver","wedding","Pernikahan"],
  ["iftar-time","other","Umum & Seminar"],
  ["imperial-flower","wedding","Pernikahan"],
  ["inagurasi","other","Umum & Seminar"],
  ["indosiar-v1","other","Party & Dinner"],
  ["indosiar-v2","other","Party & Dinner"],
  ["indosiar-v3","other","Party & Dinner"],
  ["investor-night","other","Umum & Seminar"],
  ["invitation-kai","other","Umum & Seminar"],
  ["islamic-blue","khitan","Khitanan"],
  ["islamic-brown","other","Syukuran & Islami"],
  ["islamic-geometric","aqiqah","Aqiqah"],
  ["islamic-graduation","other","Sekolah & Wisuda"],
  ["islamic-wedding","wedding","Pernikahan"],
  ["iwabri","other","Umum & Seminar"],
  ["jambore","other","Umum & Seminar"],
  ["jasper-orange","wedding","Pernikahan"],
  ["java-blue","wedding","Pernikahan"],
  ["java-maroon","wedding","Pernikahan"],
  ["javanese","wedding","Pernikahan"],
  ["javanese-pastel","wedding","Pernikahan"],
  ["javanese-purple","wedding","Pernikahan"],
  ["javanese-wayang","wedding","Pernikahan"],
  ["jawa-asli","wedding","Pernikahan"],
  ["jawa-banjar","wedding","Pernikahan"],
  ["jawa-betawi","wedding","Pernikahan"],
  ["jawa-bugis","wedding","Pernikahan"],
  ["jawa-melayu","wedding","Pernikahan"],
  ["jawa-minang","wedding","Pernikahan"],
  ["jawa-nias","wedding","Pernikahan"],
  ["jawa-padang","wedding","Pernikahan"],
  ["jawa-palembang","wedding","Pernikahan"],
  ["jump-graduation","other","Sekolah & Wisuda"],
  ["jungle-birthday","kids","Ulang Tahun"],
  ["juwara","other","Umum & Seminar"],
  ["kamboja","wedding","Pernikahan"],
  ["kazaki","other","Party & Dinner"],
  ["keep-inventing","other","Umum & Seminar"],
  ["kerawang-gayo","wedding","Pernikahan"],
  ["kindergarten","kids","Ulang Tahun"],
  ["labschool","other","Sekolah & Wisuda"],
  ["lavender","wedding","Pernikahan"],
  ["leaves-design","wedding","Pernikahan"],
  ["light-blue-flowers","wedding","Pernikahan"],
  ["lilaq-feather","wedding","Pernikahan"],
  ["lion-birthday","kids","Ulang Tahun"],
  ["little-racer","kids","Ulang Tahun"],
  ["little-unicorn","kids","Ulang Tahun"],
  ["lotus-wedding","wedding","Pernikahan"],
  ["luxury-brown","aqiqah","Aqiqah"],
  ["luxury-dark-blue","other","Umum & Seminar"],
  ["luxury-gold-maroon","other","Party & Dinner"],
  ["luxury-golden-v2","wedding","Pernikahan"],
  ["luxury-green","wedding","Pernikahan"],
  ["luxury-hotel","other","Umum & Seminar"],
  ["luxury-maroon","wedding","Pernikahan"],
  ["luxury-navy","wedding","Pernikahan"],
  ["luxury-purple","wedding","Pernikahan"],
  ["madura-modern","other","Umum & Seminar"],
  ["magic-castle","kids","Ulang Tahun"],
  ["magic-school","wedding","Pernikahan"],
  ["malam-joker","other","Umum & Seminar"],
  ["manasik-haji","other","Syukuran & Islami"],
  ["mandala-green","other","Umum & Seminar"],
  ["mandala-v2","wedding","Pernikahan"],
  ["mandala-v3","wedding","Pernikahan"],
  ["mandaling","wedding","Pernikahan"],
  ["maple-gold","wedding","Pernikahan"],
  ["market-outlook","other","Umum & Seminar"],
  ["maroon-and-blue","wedding","Pernikahan"],
  ["maroon-art","wedding","Pernikahan"],
  ["maroon-flowers","wedding","Pernikahan"],
  ["maroon-javanese","wedding","Pernikahan"],
  ["maroon-medieval","wedding","Pernikahan"],
  ["maroon-roses","wedding","Pernikahan"],
  ["maroon-watercolor","wedding","Pernikahan"],
  ["mayora","other","Umum & Seminar"],
  ["medieval-kingdom","wedding","Pernikahan"],
  ["merak-biru","wedding","Pernikahan"],
  ["mermaid","kids","Ulang Tahun"],
  ["mermaid-seaweed","kids","Ulang Tahun"],
  ["mesir","wedding","Pernikahan"],
  ["midnight-blue","wedding","Pernikahan"],
  ["midnight-green","wedding","Pernikahan"],
  ["milad-organisasi","other","Umum & Seminar"],
  ["military","kids","Ulang Tahun"],
  ["million-dreams","other","Sekolah & Wisuda"],
  ["minang-maroon","wedding","Pernikahan"],
  ["minangkabau-maroon","wedding","Pernikahan"],
  ["miner","kids","Ulang Tahun"],
  ["minimal-wedding","wedding","Pernikahan"],
  ["minimalist-black","wedding","Pernikahan"],
  ["minimalist-blue","wedding","Pernikahan"],
  ["minimalist-pink","wedding","Pernikahan"],
  ["minion-birthday","kids","Ulang Tahun"],
  ["minnie-mouse","kids","Ulang Tahun"],
  ["mughal","other","Umum & Seminar"],
  ["munas","other","Umum & Seminar"],
  ["my-pets","other","Umum & Seminar"],
  ["navy-flowers","wedding","Pernikahan"],
  ["navy-pink","wedding","Pernikahan"],
  ["newspaper","wedding","Pernikahan"],
  ["night-market","wedding","Pernikahan"],
  ["nikahfix","wedding","Pernikahan"],
  ["ondel-ondel","wedding","Pernikahan"],
  ["opening-ceremony","other","Umum & Seminar"],
  ["opening-party","other","Umum & Seminar"],
  ["orchid-flower","other","Umum & Seminar"],
  ["pacman","wedding","Pernikahan"],
  ["pakpak-banjar","wedding","Pernikahan"],
  ["palembang-aceh","wedding","Pernikahan"],
  ["palembang-jawa","wedding","Pernikahan"],
  ["palembang-lampung","wedding","Pernikahan"],
  ["paskah","other","Umum & Seminar"],
  ["pastel-blue","wedding","Pernikahan"],
  ["pastel-green","wedding","Pernikahan"],
  ["peacocks","wedding","Pernikahan"],
  ["pelantikan","other","Sekolah & Wisuda"],
  ["pelantikan-dewan","other","Umum & Seminar"],
  ["pengukuhan","other","Umum & Seminar"],
  ["peresmian-balai","other","Umum & Seminar"],
  ["pesta-perak","other","Umum & Seminar"],
  ["pink-barbie","other","Party & Dinner"],
  ["pink-bird","wedding","Pernikahan"],
  ["pink-blossom","wedding","Pernikahan"],
  ["pink-feather","wedding","Pernikahan"],
  ["pink-korea","wedding","Pernikahan"],
  ["pink-lilac","other","Party & Dinner"],
  ["pink-marble","other","Party & Dinner"],
  ["pink-night","other","Party & Dinner"],
  ["pink-orange","aqiqah","Aqiqah"],
  ["pink-roses","other","Party & Dinner"],
  ["pink-watercolor","wedding","Pernikahan"],
  ["pinto-aceh","wedding","Pernikahan"],
  ["pool-party","kids","Ulang Tahun"],
  ["purnasiswa","other","Sekolah & Wisuda"],
  ["purnawirawan-polri","other","Umum & Seminar"],
  ["purple-carnival","other","Party & Dinner"],
  ["purple-christmas","other","Natal & Tahun Baru"],
  ["purple-entertainment","other","Umum & Seminar"],
  ["purple-flowers","wedding","Pernikahan"],
  ["purple-mandala","other","Umum & Seminar"],
  ["purple-marble","wedding","Pernikahan"],
  ["purple-night","other","Party & Dinner"],
  ["putra-batik","khitan","Khitanan"],
  ["raden","wedding","Pernikahan"],
  ["rama-shinta","wedding","Pernikahan"],
  ["ramadhan-decorative","other","Syukuran & Islami"],
  ["ramadhan-kareem","other","Syukuran & Islami"],
  ["rapat-kerja","other","Umum & Seminar"],
  ["rapat-senat","other","Umum & Seminar"],
  ["rapat-terbuka","other","Umum & Seminar"],
  ["rapunzel-birthday","kids","Ulang Tahun"],
  ["red-batak","wedding","Pernikahan"],
  ["red-berry-2","wedding","Pernikahan"],
  ["red-blue","aqiqah","Aqiqah"],
  ["red-chinese","other","Umum & Seminar"],
  ["red-football","kids","Ulang Tahun"],
  ["red-lampung","wedding","Pernikahan"],
  ["red-natal","other","Natal & Tahun Baru"],
  ["red-rustic","wedding","Pernikahan"],
  ["refleksi","other","Umum & Seminar"],
  ["retro","other","Umum & Seminar"],
  ["roblox","kids","Ulang Tahun"],
  ["romantic-floral","wedding","Pernikahan"],
  ["rounded-luxurious","wedding","Pernikahan"],
  ["royal-birthday","other","Party & Dinner"],
  ["royal-purple","other","Party & Dinner"],
  ["rumah-gadang","other","Sekolah & Wisuda"],
  ["sage-green","wedding","Pernikahan"],
  ["sakura-castle","wedding","Pernikahan"],
  ["sakura-theme","wedding","Pernikahan"],
  ["salsa","wedding","Pernikahan"],
  ["selpia","wedding","Pernikahan"],
  ["sidang-senat","other","Umum & Seminar"],
  ["sidang-terbuka","other","Umum & Seminar"],
  ["silaturahim","other","Syukuran & Islami"],
  ["simple-brown","wedding","Pernikahan"],
  ["simple-bugis","wedding","Pernikahan"],
  ["simple-christmas","other","Natal & Tahun Baru"],
  ["skadron-udara","other","Umum & Seminar"],
  ["skibidi-toilet","kids","Ulang Tahun"],
  ["soft-blue","wedding","Pernikahan"],
  ["soft-brown","wedding","Pernikahan"],
  ["songket","wedding","Pernikahan"],
  ["spiderman","kids","Ulang Tahun"],
  ["spongebob","kids","Ulang Tahun"],
  ["student-perform","other","Sekolah & Wisuda"],
  ["sunda-aceh","wedding","Pernikahan"],
  ["sundar-bageecha","wedding","Pernikahan"],
  ["sunflower","wedding","Pernikahan"],
  ["tahfiz-graduation","other","Syukuran & Islami"],
  ["tekno-blue","other","Umum & Seminar"],
  ["terracotta","wedding","Pernikahan"],
  ["the-golden-future","other","Umum & Seminar"],
  ["timeless","wedding","Pernikahan"],
  ["toraja","wedding","Pernikahan"],
  ["tosca-green","aqiqah","Aqiqah"],
  ["trampolin","kids","Ulang Tahun"],
  ["tree-of-bird","wedding","Pernikahan"],
  ["tropical","other","Umum & Seminar"],
  ["tropical-plants","wedding","Pernikahan"],
  ["tuscany-blue","wedding","Pernikahan"],
  ["ucapan-perpisahan","other","Umum & Seminar"],
  ["ultraman","kids","Ulang Tahun"],
  ["under-the-sea","wedding","Pernikahan"],
  ["unicorn-party","kids","Ulang Tahun"],
  ["universe","other","Umum & Seminar"],
  ["victorian-cupid","wedding","Pernikahan"],
  ["victorious-day","other","Sekolah & Wisuda"],
  ["vine-flower","wedding","Pernikahan"],
  ["vintage-birthday","other","Party & Dinner"],
  ["vintage-cream","wedding","Pernikahan"],
  ["vintage-forest","wedding","Pernikahan"],
  ["vintage-moment","wedding","Pernikahan"],
  ["vintage-peacock","wedding","Pernikahan"],
  ["walimatul-khitan","khitan","Khitanan"],
  ["watercolor-bird","wedding","Pernikahan"],
  ["watercolor-flowers","wedding","Pernikahan"],
  ["watercolor-peacock","wedding","Pernikahan"],
  ["watercolor-pink","aqiqah","Aqiqah"],
  ["wayang-jawa","wedding","Pernikahan"],
  ["wayang-kulit","wedding","Pernikahan"],
  ["wedding-celebration","wedding","Pernikahan"],
  ["wedding-flowers","wedding","Pernikahan"],
  ["wedding-passport","wedding","Pernikahan"],
  ["wedding-watercolor","wedding","Pernikahan"],
  ["white-gold","wedding","Pernikahan"],
  ["white-kingdom","wedding","Pernikahan"],
  ["winnie-the-pooh","kids","Ulang Tahun"],
  ["wisuda-akbar","other","Sekolah & Wisuda"],
  ["wisuda-emas","other","Sekolah & Wisuda"],
  ["wisuda-harmoni","other","Sekolah & Wisuda"],
  ["wisuda-perwira","other","Sekolah & Wisuda"],
  ["wisuda-sarjana","other","Umum & Seminar"],
  ["wonderful","wedding","Pernikahan"],
  ["wow-batik","other","Umum & Seminar"],
  ["year-end-gathering","other","Party & Dinner"],
  ["ylang-ylang","wedding","Pernikahan"],
  ["yoru-no-ryusei","wedding","Pernikahan"]
];
/* Warna latar kartu per tema [warna utama, aksen] — dihitung dari gambar tema. Tema baru tanpa baris di sini memakai warna brand. */
const JJ_TEMA_WARNA = {
  "aceh-jawa":["#A8A39C","#4D4435"],
  "adat-aceh":["#CBB27B","#CBB27B"],
  "adat-batak":["#991919","#991919"],
  "adat-betawi":["#671B21","#671B21"],
  "adat-bugis-flat":["#D1C2B3","#876A59"],
  "adat-jawa":["#C6BEB4","#431E1D"],
  "adat-karo":["#ABA797","#C07753"],
  "adat-makassar":["#BEA476","#BEA476"],
  "adat-minang":["#AE9F72","#A90B01"],
  "adat-papua":["#363C52","#363C52"],
  "adat-rote":["#60302A","#60302A"],
  "adat-selaso":["#41495F","#41495F"],
  "adat-sumatera":["#D7BD78","#D7BD78"],
  "adat-sunda":["#D7C17D","#523C26"],
  "aesthetic-java":["#51453E","#583839"],
  "aesthetic-victorian":["#64361B","#64361B"],
  "alexandra":["#32302A","#5F2528"],
  "almond-flowers":["#A76235","#A76235"],
  "angela":["#BBBBB9","#901B24"],
  "apoteker":["#9570DB","#9570DB"],
  "apresiasi-kelulusan":["#BBBBB9","#144833"],
  "argentina-birthday":["#3366B1","#3366B1"],
  "arminareka":["#C2C3C4","#BAA083"],
  "artichoke":["#718170","#B0B4A9"],
  "astronout":["#904EC2","#333260"],
  "auntumn":["#762F01","#762F01"],
  "avengers":["#F1B537","#C61A18"],
  "aysha":["#A08D5F","#A08D5F"],
  "azureish-white":["#ACB4C0","#A1A7AE"],
  "baby-blue":["#8FB0D1","#8FB0D1"],
  "baby-boss":["#152A44","#1A90C1"],
  "baby-elephant":["#B6B8B8","#91B3D4"],
  "baby-giggles":["#7E9CA6","#AA9D7D"],
  "baby-shark":["#3383C1","#3383C1"],
  "bali-land":["#E9B930","#E9B930"],
  "bali-paper-ink":["#DFC299","#C19878"],
  "banjar-jawa":["#C59668","#C59668"],
  "banjar-kuning":["#B2B0A9","#C19928"],
  "bare-bears":["#95A397","#9A7D5E"],
  "bataknese":["#8C3832","#8C3832"],
  "batik-ntt":["#BBB6AD","#A89570"],
  "batik-nusantara":["#B2A898","#574532"],
  "be-the-light":["#455275","#3F424E"],
  "beach-club":["#BBB013","#0A7B7D"],
  "beach-of-happiness":["#74A2B6","#9F5D56"],
  "beautiful-bali":["#E6B936","#E6B936"],
  "beautiful-flower":["#7C8562","#32445F"],
  "berinovasi":["#0E9451","#0E9451"],
  "betawi-minang":["#B9AE95","#6B4135"],
  "betawi-vintage":["#E7B9A0","#E7B9A0"],
  "bincang-seru":["#713C35","#713C35"],
  "bird-charm":["#B0B0AC","#92A195"],
  "birthday-beach":["#9DB6B9","#EFB742"],
  "birthday-bus":["#B9B9B8","#3AA5D1"],
  "birthday-girl":["#94B291","#21CAFD"],
  "biru-jawa":["#40426A","#40426A"],
  "black-and-white":["#B7B8B7","#AEAEAC"],
  "black-birthday":["#262729","#7F4B47"],
  "black-brown":["#32302A","#75502B"],
  "black-coral":["#BBBBB9","#53626B"],
  "black-glitter":["#4C4843","#D3BA91"],
  "black-gold":["#3A3833","#B09F47"],
  "black-java":["#3D3B36","#B1B2AF"],
  "blue-casanova":["#CBBDA7","#034A69"],
  "blue-floral":["#A4A4A4","#172937"],
  "blue-gold":["#D2C970","#0E86A2"],
  "blue-graduation":["#3A3D46","#343346"],
  "blue-javanese":["#03386F","#03386F"],
  "blue-metalic":["#BBBBB9","#478FC9"],
  "blue-night":["#095D95","#095D95"],
  "blue-roses":["#ABAAA0","#6E6855"],
  "blue-school":["#23A0D2","#00445E"],
  "blue-seventeen":["#B9B9B8","#3B6FA6"],
  "blue-watercolor":["#B0B2B1","#96A1A9"],
  "blue-wedding":["#B8B9B5","#698B9B"],
  "blue-white":["#3E427C","#3E427C"],
  "boboiboy":["#BBBBB9","#EB2F5A"],
  "boho-terracotta":["#B1ACA2","#CDA38A"],
  "boho-wedding":["#455547","#ABA380"],
  "bonvoyage":["#085674","#085674"],
  "brown-flowers":["#A19988","#B4B0AB"],
  "brown-leaves":["#B2A8A4","#D69B7A"],
  "budaya-aceh":["#524136","#F69A1F"],
  "budaya-batak":["#E11E2B","#E11E2B"],
  "bugis-culture":["#9C9A88","#584E49"],
  "bugis-maroon":["#7E3846","#7E3846"],
  "bugis-minang":["#C7C5AD","#536658"],
  "bugis-pink":["#661B3A","#661B3A"],
  "bunny-pastel":["#D8B6A3","#5C6444"],
  "camelia":["#B4B2AD","#949E97"],
  "candlelit":["#B0AFA2","#97845B"],
  "carolina-blue":["#64B4CE","#64B4CE"],
  "caroline":["#D20E0E","#D20E0E"],
  "casanova":["#D89C9B","#D89C9B"],
  "cathrine":["#6C597A","#6C597A"],
  "ceremony":["#5C809E","#344C61"],
  "charm-birthday":["#D79A8C","#C69080"],
  "cherry-blossom":["#B8A3A6","#F17D91"],
  "chinese-wedding":["#D19541","#763032"],
  "christmas-party":["#A7B981","#76865B"],
  "christmas-watercolor":["#BBB9B4","#7D6D5B"],
  "cinnamoroll":["#BBBBB9","#90989C"],
  "classic-blue":["#A6B9D9","#515F8D"],
  "classic-parthenon":["#B8B7B2","#A9A394"],
  "classic-wedding":["#CAC4C4","#B0ADAB"],
  "cocomelon":["#7CA79C","#6BCAB9"],
  "colored-beach":["#A7AAA9","#2A4E59"],
  "conference":["#98B1B7","#0F4C9C"],
  "content-creator":["#04A7FD","#04A7FD"],
  "crayola-flowers":["#72896C","#B4B0A4"],
  "cream-cute":["#AF875F","#AF875F"],
  "cream-japan":["#BDB5A4","#5C4D3F"],
  "cream-lampung":["#B2B1AB","#483D36"],
  "cream-purple":["#C890C2","#C890C2"],
  "creamy-coral":["#A2B0C0","#BABBB9"],
  "cristian":["#B4B4B1","#B8A783"],
  "cross-break":["#BAAE9E","#4B2114"],
  "cute-java":["#B3B4AE","#DAB441"],
  "daisy-gray":["#BABBB9","#9BA3A2"],
  "dark-brown":["#32302A","#492D20"],
  "dark-green":["#02475B","#02475B"],
  "dark-purple":["#99447E","#613E54"],
  "dayak-java":["#631411","#793D36"],
  "dayak-jawa":["#806044","#806044"],
  "dayak-kalteng":["#B9AB8A","#B45B3E"],
  "dayak-toraja":["#685B32","#C60F15"],
  "dies-natalis":["#BFC0C0","#C90B02"],
  "dino-birthday":["#BDC386","#5F4F35"],
  "diploma":["#F19324","#F19324"],
  "dolphin-green":["#719085","#B1ADA6"],
  "dried-leaves-2":["#374D4A","#374D4A"],
  "eid-mubarak":["#ADA59A","#9C8667"],
  "elegant-aceh":["#D1BA76","#D1BA76"],
  "elegant-blue":["#B9B3AF","#89A5AC"],
  "elegant-graduation":["#B29E58","#B29E58"],
  "elegant-islamic":["#86B6B4","#86B6B4"],
  "elegant-red":["#BBBBB8","#91322D"],
  "elegant-wedding":["#557BA7","#557BA7"],
  "emily":["#97767A","#A7A59D"],
  "engagement":["#BBBBB8","#9B9F8F"],
  "enter-house":["#3C485C","#3C4A60"],
  "esther":["#382914","#382914"],
  "ethnic-pattern":["#BBBBB9","#B09E8E"],
  "event-launching":["#FE0024","#FE0024"],
  "exclusive-ramadhan":["#444B52","#444B52"],
  "fairy-birthday":["#B99298","#B3B1AC"],
  "fairy-purple":["#B5A5B3","#6E5F73"],
  "fairy-tail":["#93AD84","#ADB4AB"],
  "feminime-javanese":["#A9B8A8","#B5B2AF"],
  "flamingo":["#ABB6B9","#B7766D"],
  "flat-islamic":["#62A1C2","#62A1C2"],
  "floral-purple":["#BBBBB9","#5B2D44"],
  "food-business":["#97DC56","#EE600D"],
  "forever-journey":["#DD5162","#DD5162"],
  "frozen":["#B4B7B8","#54ADDA"],
  "galaxy":["#8E4BBB","#413047"],
  "galungan":["#F08B05","#F08B05"],
  "gold-black-silver":["#323232","#B5A983"],
  "gold-christmas":["#AEA99B","#453E38"],
  "gold-gathering":["#32302A","#5B4325"],
  "gold-islamic":["#31465F","#31465F"],
  "gold-marble":["#B2B1B0","#A9A9A5"],
  "golden-blue":["#142C4A","#142C4A"],
  "golden-watercolor":["#A37428","#A37428"],
  "golf-birthday":["#A6A7A5","#508255"],
  "gradient-black":["#3A383C","#363434"],
  "graduation":["#D3A248","#D3A248"],
  "graduation-ceremony":["#042B59","#0062AB"],
  "grand-launching":["#AAAAA8","#C8B866"],
  "grand-opening":["#B6B1A5","#C78D46"],
  "great-talents":["#9DAF89","#4F4C3C"],
  "green-aniv":["#045440","#00372A"],
  "green-bunex":["#AEC05B","#265D53"],
  "green-floral":["#5F8A75","#5F8A75"],
  "green-garden":["#023A26","#023A26"],
  "green-hospital":["#BABAB8","#088849"],
  "green-leaves":["#2F6658","#2D6456"],
  "green-mandala":["#B9BBAF","#7ACD9F"],
  "green-motion":["#8C9787","#B8B9B8"],
  "green-passport":["#BBBBB9","#949E90"],
  "green-pink":["#BBB4B2","#DA797E"],
  "green-roses":["#AAAEA7","#9BB596"],
  "green-school":["#384836","#0F4923"],
  "green-tropical":["#8D9968","#8D9968"],
  "green-watercolor":["#AFB6AF","#90A290"],
  "halal-bihalal":["#BEC7CB","#94A7AC"],
  "hand-drawn":["#8BB5D1","#8BB5D1"],
  "hangout":["#66A9B4","#5DC1D3"],
  "happy-dino":["#A3A85A","#779F40"],
  "heroes":["#272858","#167DA9"],
  "heroes-graduation":["#3CD8D3","#032A54"],
  "hogwarts":["#87220E","#87220E"],
  "hot-wheels":["#0068B2","#0290D4"],
  "ice-silver":["#8093CB","#8093CB"],
  "iftar-time":["#6A3A7C","#6A3A7C"],
  "imperial-flower":["#BBBBB9","#A9AAA7"],
  "inagurasi":["#3D484B","#384E50"],
  "indosiar-v1":["#207093","#082B42"],
  "indosiar-v2":["#BAA9AD","#7B3B4E"],
  "indosiar-v3":["#B3C0AD","#0F4B30"],
  "investor-night":["#6C4F2E","#6C4F2E"],
  "invitation-kai":["#C29A71","#C29A71"],
  "islamic-blue":["#214373","#214373"],
  "islamic-brown":["#64422D","#743105"],
  "islamic-geometric":["#2F684C","#2F684C"],
  "islamic-graduation":["#0761CB","#0761CB"],
  "islamic-wedding":["#B4B2AB","#BE9257"],
  "iwabri":["#CD475B","#B5374D"],
  "jambore":["#4DB0AE","#354870"],
  "jasper-orange":["#723A4B","#723A4B"],
  "java-blue":["#A5A8A9","#44424A"],
  "java-maroon":["#A59C85","#79453C"],
  "javanese":["#B7B0A5","#3C362B"],
  "javanese-pastel":["#AEACA7","#BEAF9E"],
  "javanese-purple":["#AE98AA","#5B3E4C"],
  "javanese-wayang":["#B6B0A5","#3A2F28"],
  "jawa-asli":["#32302A","#615442"],
  "jawa-banjar":["#A59C7A","#847E52"],
  "jawa-betawi":["#494742","#B5A06C"],
  "jawa-bugis":["#BCB989","#243E35"],
  "jawa-melayu":["#A99C82","#A9946A"],
  "jawa-minang":["#A72523","#A52120"],
  "jawa-nias":["#B0A188","#EFB16A"],
  "jawa-padang":["#805E42","#805E42"],
  "jawa-palembang":["#95302B","#95302B"],
  "jump-graduation":["#B5B8B6","#3B3D65"],
  "jungle-birthday":["#8D5B3C","#8D5B3C"],
  "juwara":["#32302A","#32322B"],
  "kamboja":["#948770","#B4B1A6"],
  "kazaki":["#376C9B","#376C9B"],
  "keep-inventing":["#A5A830","#A5A830"],
  "kerawang-gayo":["#32302A","#73552F"],
  "kindergarten":["#FE9FAC","#BBAE74"],
  "labschool":["#B4B19B","#FDBF00"],
  "lavender":["#AD8FCD","#AD8FCD"],
  "leaves-design":["#B3AEA6","#9F9F93"],
  "light-blue-flowers":["#91A1AD","#BABAB8"],
  "lilaq-feather":["#BD89BD","#BD89BD"],
  "lion-birthday":["#95A5A7","#B2AD7D"],
  "little-racer":["#B0B0AF","#585050"],
  "little-unicorn":["#C7A0C6","#BBA7A7"],
  "lotus-wedding":["#9F9D93","#B9B8B1"],
  "luxury-brown":["#694244","#4B2C2B"],
  "luxury-dark-blue":["#769BCF","#132560"],
  "luxury-gold-maroon":["#63151C","#99323F"],
  "luxury-golden-v2":["#396E66","#396E66"],
  "luxury-green":["#57696D","#A0A8A7"],
  "luxury-hotel":["#2E362D","#0D394A"],
  "luxury-maroon":["#AEA388","#8E3630"],
  "luxury-navy":["#3E5372","#3E5372"],
  "luxury-purple":["#564E5B","#A5A3A9"],
  "madura-modern":["#675B55","#C3C2C2"],
  "magic-castle":["#F2B4CD","#E39FB6"],
  "magic-school":["#88352E","#88352E"],
  "malam-joker":["#B29A77","#C4976E"],
  "manasik-haji":["#B7B7B4","#A9A5A0"],
  "mandala-green":["#0F7160","#0F7160"],
  "mandala-v2":["#BB965C","#BB965C"],
  "mandala-v3":["#B3A476","#C57713"],
  "mandaling":["#A37F73","#A37F73"],
  "maple-gold":["#907732","#907732"],
  "market-outlook":["#9E8842","#9E8842"],
  "maroon-and-blue":["#BBB8B2","#A9BED1"],
  "maroon-art":["#A4A094","#532023"],
  "maroon-flowers":["#681820","#673636"],
  "maroon-javanese":["#631411","#611410"],
  "maroon-medieval":["#A58561","#A58561"],
  "maroon-roses":["#B29A9D","#4F2F34"],
  "maroon-watercolor":["#BAB9B8","#A79E9F"],
  "mayora":["#B2AEA4","#ECA904"],
  "medieval-kingdom":["#CBBC9D","#8D6675"],
  "merak-biru":["#3B5658","#3B5658"],
  "mermaid":["#ACB1B4","#FEB3DC"],
  "mermaid-seaweed":["#F98CAE","#F98CAE"],
  "mesir":["#BBBBB9","#525C3C"],
  "midnight-blue":["#B0AAA8","#0F3B5F"],
  "midnight-green":["#3A4849","#3A4849"],
  "milad-organisasi":["#BAC1BD","#0C934A"],
  "military":["#5A6C42","#5A6C42"],
  "million-dreams":["#2C3130","#87302A"],
  "minang-maroon":["#BBB3A2","#61191C"],
  "minangkabau-maroon":["#581B19","#693A35"],
  "miner":["#8BAAB2","#E6BB55"],
  "minimal-wedding":["#B0AEAC","#C1A783"],
  "minimalist-black":["#B2B2B0","#2C2B2C"],
  "minimalist-blue":["#7BB3D1","#7BB3D1"],
  "minimalist-pink":["#BBBBB9","#A99F9E"],
  "minion-birthday":["#3E5E6E","#B99924"],
  "minnie-mouse":["#EB81A0","#4C1C2E"],
  "mughal":["#B1736D","#692125"],
  "munas":["#EBAA05","#EBAA05"],
  "my-pets":["#293C6F","#E57A33"],
  "navy-flowers":["#9D9EA2","#1C2B3D"],
  "navy-pink":["#BB3F60","#BB3F60"],
  "newspaper":["#534844","#B2B2B1"],
  "night-market":["#2B407B","#2B407B"],
  "nikahfix":["#DA2128","#DA2128"],
  "ondel-ondel":["#AD0304","#AD0304"],
  "opening-ceremony":["#BBBBB9","#36475C"],
  "opening-party":["#BBBBB9","#A59996"],
  "orchid-flower":["#4DC1B9","#4DC1B9"],
  "pacman":["#A8A52D","#354C4E"],
  "pakpak-banjar":["#ACA695","#BB9C13"],
  "palembang-aceh":["#979980","#A99E73"],
  "palembang-jawa":["#BB9680","#8E0907"],
  "palembang-lampung":["#770D11","#770D11"],
  "paskah":["#B09E21","#6334A4"],
  "pastel-blue":["#8A9DA9","#31393F"],
  "pastel-green":["#BBBBB9","#A8A9A3"],
  "peacocks":["#B3B2AF","#367B98"],
  "pelantikan":["#B4A9B6","#9C99A6"],
  "pelantikan-dewan":["#BBBBB9","#C25F68"],
  "pengukuhan":["#244563","#244563"],
  "peresmian-balai":["#3F4040","#93873C"],
  "pesta-perak":["#B8B9B6","#B49D7E"],
  "pink-barbie":["#BA96AF","#FF54B7"],
  "pink-bird":["#B14E74","#B14E74"],
  "pink-blossom":["#B7AFAF","#B59598"],
  "pink-feather":["#933F54","#933F54"],
  "pink-korea":["#FE9CBB","#FE9CBB"],
  "pink-lilac":["#BBBBB9","#A29896"],
  "pink-marble":["#B6B5B2","#94A1A3"],
  "pink-night":["#D2349F","#7F0556"],
  "pink-orange":["#FCA18D","#FCA18D"],
  "pink-roses":["#E391B0","#A79A6B"],
  "pink-watercolor":["#B68F8C","#B68F8C"],
  "pinto-aceh":["#494742","#BAA765"],
  "pool-party":["#3DD4EE","#25C6E6"],
  "purnasiswa":["#D0A758","#D0A758"],
  "purnawirawan-polri":["#8F323E","#9E3241"],
  "purple-carnival":["#FEC117","#FEC117"],
  "purple-christmas":["#5D177A","#5D177A"],
  "purple-entertainment":["#B9B9B8","#53437E"],
  "purple-flowers":["#B4B4B2","#87A1B6"],
  "purple-mandala":["#46385E","#46385E"],
  "purple-marble":["#AEADAB","#B98E9D"],
  "purple-night":["#503977","#05FF8F"],
  "putra-batik":["#966F5E","#966F5E"],
  "raden":["#BE9B6B","#BE9B6B"],
  "rama-shinta":["#A69A84","#866D62"],
  "ramadhan-decorative":["#5E4809","#5E4809"],
  "ramadhan-kareem":["#ADADAC","#45666D"],
  "rapat-kerja":["#BABAB8","#2C3D56"],
  "rapat-senat":["#BABAB8","#206717"],
  "rapat-terbuka":["#B8B8B6","#A7A9A7"],
  "rapunzel-birthday":["#D9818E","#D9818E"],
  "red-batak":["#B42B32","#931E23"],
  "red-berry-2":["#919A86","#B2B2B1"],
  "red-blue":["#3475A7","#1C4F7A"],
  "red-chinese":["#CE1012","#8E302D"],
  "red-football":["#883833","#AD0C0E"],
  "red-lampung":["#9F0119","#9F0119"],
  "red-natal":["#BBBBB9","#F0003F"],
  "red-rustic":["#BAB0B2","#9C293C"],
  "refleksi":["#CE8505","#CE8505"],
  "retro":["#1C434F","#1C434F"],
  "roblox":["#247EAB","#324A5F"],
  "romantic-floral":["#B2B2B1","#B09D93"],
  "rounded-luxurious":["#9A8F81","#37342E"],
  "royal-birthday":["#ADA79E","#6C9DAF"],
  "royal-purple":["#A08099","#ADACAB"],
  "rumah-gadang":["#D8B580","#8C2235"],
  "sage-green":["#A2B78E","#31332B"],
  "sakura-castle":["#7F7A77","#B7B0AF"],
  "sakura-theme":["#BAB9B1","#AFA696"],
  "salsa":["#B9B0A0","#8B251B"],
  "selpia":["#B3B3B1","#678181"],
  "sidang-senat":["#BBBBB9","#3CC9BD"],
  "sidang-terbuka":["#C8B38B","#434A5F"],
  "silaturahim":["#92AAB4","#A0A795"],
  "simple-brown":["#D1C3BA","#9B7A6E"],
  "simple-bugis":["#80322E","#92302C"],
  "simple-christmas":["#BAAEA2","#91B267"],
  "skadron-udara":["#0E436C","#0E436C"],
  "skibidi-toilet":["#4A4640","#876149"],
  "soft-blue":["#B1CADE","#B4B2AC"],
  "soft-brown":["#BBBBB9","#947B5F"],
  "songket":["#802E33","#802E33"],
  "spiderman":["#802526","#7C332F"],
  "spongebob":["#62CFD1","#36B2C4"],
  "student-perform":["#042B59","#005EA5"],
  "sunda-aceh":["#ADAAA5","#9E7338"],
  "sundar-bageecha":["#84A49E","#7AA083"],
  "sunflower":["#BBBBB9","#9E9B94"],
  "tahfiz-graduation":["#1F2C58","#F2B64A"],
  "tekno-blue":["#343F59","#17BAB8"],
  "terracotta":["#D89577","#CB896F"],
  "the-golden-future":["#BFAA5B","#34302A"],
  "timeless":["#7A7066","#442D25"],
  "toraja":["#AC1C20","#AC1C20"],
  "tosca-green":["#9FB1B1","#40B2B8"],
  "trampolin":["#94A13A","#19C3DC"],
  "tree-of-bird":["#A8ACAC","#9FA28E"],
  "tropical":["#BBBBB9","#494D32"],
  "tropical-plants":["#B9B8B5","#A8ABA0"],
  "tuscany-blue":["#2B4877","#2A4877"],
  "ucapan-perpisahan":["#3A515C","#3A515C"],
  "ultraman":["#4C3F3E","#3C4046"],
  "under-the-sea":["#80ADB0","#114C63"],
  "unicorn-party":["#BBBBB9","#B3949D"],
  "universe":["#483B62","#483B62"],
  "victorian-cupid":["#A9A7A0","#714125"],
  "victorious-day":["#A79C8D","#694040"],
  "vine-flower":["#B4B1AD","#A0988D"],
  "vintage-birthday":["#E1BDAD","#433930"],
  "vintage-cream":["#D1B28A","#D1B28A"],
  "vintage-forest":["#79724F","#79724F"],
  "vintage-moment":["#A99C86","#B9B9B8"],
  "vintage-peacock":["#BBBAB6","#AEAEA0"],
  "walimatul-khitan":["#654023","#542B0F"],
  "watercolor-bird":["#D37E9C","#D37E9C"],
  "watercolor-flowers":["#BBB8B2","#6D2E35"],
  "watercolor-peacock":["#B09C9E","#B6B4B1"],
  "watercolor-pink":["#BBBBB9","#AA9C97"],
  "wayang-jawa":["#B4B4AC","#71573E"],
  "wayang-kulit":["#976627","#976627"],
  "wedding-celebration":["#A68650","#6D300A"],
  "wedding-flowers":["#8FACB8","#6E7657"],
  "wedding-passport":["#69181D","#69181D"],
  "wedding-watercolor":["#B4B9B7","#B1AC92"],
  "white-gold":["#5F7544","#5F7544"],
  "white-kingdom":["#BBB8B3","#9CA3A9"],
  "winnie-the-pooh":["#356FAE","#3BBAE0"],
  "wisuda-akbar":["#E71B24","#E71B24"],
  "wisuda-emas":["#AA9C7A","#BB9550"],
  "wisuda-harmoni":["#15355B","#19446E"],
  "wisuda-perwira":["#35395D","#156CD1"],
  "wisuda-sarjana":["#949E52","#599921"],
  "wonderful":["#AAAEB2","#30334F"],
  "wow-batik":["#CAB59B","#6D2C06"],
  "year-end-gathering":["#857662","#857662"],
  "ylang-ylang":["#33463C","#33463C"],
  "yoru-no-ryusei":["#B9A78F","#DEB39F"]
};


(function () {
  const SITE = JANJIARA.siteUrl;
  const TAG = { wedding: "tag--wedding", kids: "tag--kids", khitan: "tag--khitan", aqiqah: "tag--aqiqah", other: "tag--other" };
  const FORM_CAT = { wedding: "wedding", kids: "birthday", khitan: "khitan", aqiqah: "aqiqah", other: "umum" };
  const esc = function (s) { return String(s || "").replace(/[&<>"']/g, function (c) { return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]; }); };
  const toName = function (slug) { return slug.split("-").map(function (w) { return w.charAt(0).toUpperCase() + w.slice(1); }).join(" "); };
  const themes = JJ_TEMA.map(function (r) { return { slug: r[0], cat: r[1], sub: r[2], name: toName(r[0]) }; });
  const bySlug = {}; themes.forEach(function (t) { bySlug[t.slug] = t; });

  function waMessage(paket, tema) {
    const p = PAKET[paket];
    return waPesan([
      "Saya mau order undangan digital 🥰:",
      "",
      "\u2022 Paket: *Paket " + paket + "*",
      tema ? "\u2022 Tema: *" + tema + "*" : null,
      p ? "\u2022 Harga: " + hargaTeks(p) : null,
      p ? "\u2022 Masa aktif: " + p.aktif : null,
      "",
      "Mohon info langkah selanjutnya ya 🤗"
    ]);
  }
  window.JJ_waMessage = waMessage;

  /* ---------- Pemilih paket ---------- */
  const picker = document.getElementById("pkg-picker");
  const list = document.getElementById("pkg-list");
  let lastFocus = null;
  function openPicker(t) {
    lastFocus = document.activeElement;
    document.getElementById("pkg-title").textContent = t.name;
    const img = document.getElementById("pkg-img");
    if (t.img) { img.src = t.img; img.alt = "Tema " + t.name; img.hidden = false; } else { img.hidden = true; }
    const pv = document.getElementById("pkg-preview");
    pv.href = t.preview || "#"; pv.hidden = !t.preview;
    list.innerHTML = Object.keys(PAKET).map(function (k) {
      const p = PAKET[k];
      return '<a class="pkg-option" target="_blank" rel="noopener" data-paket="' + esc(k) + '"' +
        ' href="' + esc(waLink(waMessage(k, t.name))) + '">' +
        '<span><b>' + esc(k) + '</b>' + (k === "Cerita" ? '<em>Rekomendasi</em>' : '') + '</span>' +
        '<span class="pkg-option__price">' + esc(p.opening) + (p.opening !== p.normal ? '<s>' + esc(p.normal) + '</s>' : '') + '</span>' +
        '<span class="pkg-option__meta">Masa aktif ' + esc(p.aktif) + ' · ' + esc(p.kerja) + '</span></a>';
    }).join("");
    document.getElementById("pkg-form").href = "#order?tema=" + encodeURIComponent(t.name) + "&kategori=" + (FORM_CAT[t.cat] || "umum");
    picker.hidden = false; document.body.classList.add("has-picker");
    picker.querySelector(".pkg-picker__close").focus();
  }
  function closePicker() {
    if (picker.hidden) return;
    picker.hidden = true; document.body.classList.remove("has-picker");
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  picker.addEventListener("click", function (e) {
    if (e.target.closest("[data-close]")) closePicker();
    if (e.target.closest(".pkg-option, .pkg-picker__form")) setTimeout(closePicker, 0);
  });
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") closePicker(); });

  /* Kartu tema di landing page: tombol "Pesan" membuka pemilih paket (Form Order tetap bisa dari dalam pemilih). */
  const landingGrid = document.getElementById("themes");
  if (landingGrid) landingGrid.addEventListener("click", function (e) {
    const a = e.target.closest('a[href^="#order?tema="]');
    if (!a) return;
    e.preventDefault();
    const card = a.closest(".theme-card");
    const nama = decodeURIComponent((a.getAttribute("href").match(/tema=([^&]*)/) || [])[1] || "");
    const img = card && card.querySelector("img");
    const pv = card && card.querySelector('a[target="_blank"]');
    openPicker({ name: nama, cat: card ? card.dataset.cat : "other", img: img ? img.getAttribute("src") : "", preview: pv ? pv.href : "" });
  });
  document.querySelectorAll("[data-tema-total]").forEach(function (el) { el.textContent = themes.length + " tema"; });

  /* ---------- Halaman katalog ---------- */
  const page = document.getElementById("katalog-tema");
  const grid = document.getElementById("catalog-grid");
  const more = document.getElementById("catalog-more");
  const q = document.getElementById("catalog-q");
  const countEl = document.getElementById("catalog-count");
  const empty = document.getElementById("catalog-empty");
  const fbtns = page.querySelectorAll("[data-cfilter]");
  let state = { cat: "all", q: "", shown: 0, list: [] };

  page.querySelectorAll("[data-count]").forEach(function (el) {
    const c = el.dataset.count;
    el.textContent = c === "all" ? themes.length : themes.filter(function (t) { return t.cat === c; }).length;
  });
  page.querySelectorAll(".js-catalog-wa").forEach(function (a) {
    a.href = waLink(waPesan("Saya mau tanya-tanya soal tema undangan."));
    a.target = "_blank"; a.rel = "noopener";
  });

  function card(t) {
    return '<article class="theme-card is-visible" data-cat="' + t.cat + '">' +
      '<div class="theme-card__img"><img src="' + JJ_CATALOG.imageDir + t.slug + '.webp" alt="Tema ' + esc(t.name) + '" loading="lazy" width="600" height="600"></div>' +
      '<div class="theme-card__body"><div class="theme-card__top"><h3>' + esc(t.name) + '</h3><span class="tag ' + TAG[t.cat] + '">' + esc(t.sub) + '</span></div>' +
      '<div class="theme-card__actions">' +
      '<a class="btn btn--outline btn--sm" href="' + SITE + '/preview/' + t.slug + '" target="_blank" rel="noopener">Preview</a>' +
      '<button class="btn btn--primary btn--sm" type="button" data-pick="' + t.slug + '">Pilih Paket</button></div></div></article>';
  }
  function render(reset) {
    if (reset) {
      const s = state.q.trim().toLowerCase();
      state.list = themes.filter(function (t) {
        return (state.cat === "all" || t.cat === state.cat) && (!s || t.name.toLowerCase().indexOf(s) > -1 || t.slug.indexOf(s.replace(/\s+/g, "-")) > -1);
      });
      state.shown = 0; grid.innerHTML = "";
    }
    const next = state.list.slice(state.shown, state.shown + JJ_CATALOG.pageSize);
    grid.insertAdjacentHTML("beforeend", next.map(card).join(""));
    state.shown += next.length;
    /* Sembunyikan tombol DAN pembungkusnya bila semua item sudah tampil. */
    more.parentElement.hidden = state.shown >= state.list.length;
    empty.hidden = state.list.length > 0;
    countEl.textContent = state.list.length ? "Menampilkan " + state.shown + " dari " + state.list.length + " tema" : "";
  }
  function setCat(c) {
    state.cat = c;
    fbtns.forEach(function (b) { b.setAttribute("aria-pressed", String(b.dataset.cfilter === c)); });
    render(true);
  }
  fbtns.forEach(function (b) { b.addEventListener("click", function () { setCat(b.dataset.cfilter); }); });
  let qt; q.addEventListener("input", function () { clearTimeout(qt); qt = setTimeout(function () { state.q = q.value; render(true); }, 150); });
  more.addEventListener("click", function () { render(false); });
  grid.addEventListener("click", function (e) {
    const b = e.target.closest("[data-pick]"); if (!b) return;
    const t = bySlug[b.dataset.pick];
    openPicker({ name: t.name, cat: t.cat, img: JJ_CATALOG.imageDir + t.slug + ".webp", preview: SITE + "/preview/" + t.slug });
  });

  /* ---------- Routing #katalog-tema (berjalan setelah routing lama) ---------- */
  let rendered = false;
  const BASE_TITLE = window.JJ_TITLE || "";
  function catalogRoute(fromLoad) {
    const on = location.hash.indexOf("#katalog-tema") === 0;
    const was = document.body.classList.contains("is-catalog");
    closePicker();
    document.body.classList.toggle("is-catalog", on);
    page.hidden = !on;
    if (on) {
      const m = location.hash.match(/kategori=([a-z]+)/);
      if (!rendered || m) { rendered = true; setCat(m && TAG[m[1]] ? m[1] : state.cat); }
      document.title = "Katalog Tema — JANJIARA";
      if (!was || fromLoad) window.scrollTo({ top: 0, behavior: "instant" });
    } else if (was) {
      if (location.hash.indexOf("#order") !== 0 && BASE_TITLE) document.title = BASE_TITLE;
      const id = location.hash.slice(1).split("?")[0];
      const el = id && id !== "top" && location.hash.indexOf("#order") !== 0 ? document.getElementById(id) : null;
      requestAnimationFrame(function () { el ? el.scrollIntoView({ behavior: "instant" }) : window.scrollTo({ top: 0, behavior: "instant" }); });
    }
  }
  window.addEventListener("hashchange", function () { catalogRoute(false); });
  catalogRoute(true);
})();
</script>
<script>
/* =====================================================================
   KATALOG VIDEO UCAPAN (v6) — blok terpisah, logika katalog tema tidak diubah.
   File video & poster di-host di repo GitHub holis12821/janjiara-tema dan
   disajikan lewat jsDelivr CDN.

   Format pesan WhatsApp:
     Halo Admin JANJIARA
     Saya mau order Video Ucapan *Merry Christmas Pastel*
   ===================================================================== */
const JJ_VIDEO_CFG = {
  /* Sumber file, mengikuti "@main" sama seperti TEMA_IMG. Lihat catatan lengkap di TEMA_IMG,
     termasuk syarat repo harus tetap publik dan cara pindah ke tag rilis nanti. */
  cdnBase:    "video/",
  posterBase: JJ_CDN + "video/poster/",   /* poster berlatar baru; cadangan lokal otomatis */
  durasi:     "0:30",   // durasi default bila tidak diisi per baris
  pageSize:   12,       // jumlah kartu per "Muat lebih banyak"
  teaser:     4         // jumlah kartu di seksi Video Ucapan pada landing page
};
/* Kategori video. Tambah baris baru bila ada jenis ucapan baru — chip filter
   hanya muncul untuk kategori yang sudah punya video. */
const JJ_VIDEO_KAT = {
  "natal":      { label: "Natal",        tag: "tag--khitan" },
  "tahun-baru": { label: "Tahun Baru",   tag: "tag--other"  },
  "lebaran":    { label: "Idulfitri",    tag: "tag--aqiqah" },
  "wedding":    { label: "Pernikahan",   tag: "tag--wedding" },
  "kids":       { label: "Ulang Tahun",  tag: "tag--kids"   },
  "lain":       { label: "Ucapan Lain",  tag: "tag--other"  }
};
/* Data video: ["slug", "kategori", "Nama Tampilan (opsional)", "durasi (opsional)"]
   slug = nama file tanpa .mp4 -> video: <cdnBase>slug.mp4 · poster: <posterBase>slug.webp */
const JJ_VIDEO = [
  ["natal-tahun-baru-001", "natal",      "Merry Christmas Pastel",  ""],
  ["natal-tahun-baru-002", "natal",      "Merry Christmas Klasik",  ""],
  ["natal-tahun-baru-003", "natal",      "Natal Pohon Cemara",      ""],
  ["natal-tahun-baru-004", "natal",      "Natal Salam Pribadi",     ""],
  ["natal-tahun-baru-005", "tahun-baru", "Tahun Baru Silver",       ""],
  ["natal-tahun-baru-006", "tahun-baru", "Countdown Tahun Baru",    ""]
];

(function () {
  const CFG = JJ_VIDEO_CFG, KAT = JJ_VIDEO_KAT;
  const esc = function (s) { return String(s || "").replace(/[&<>"']/g, function (c) { return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]; }); };
  const toName = function (slug) { return slug.split("-").map(function (w) { return w.charAt(0).toUpperCase() + w.slice(1); }).join(" "); };

  const videos = JJ_VIDEO.map(function (r) {
    const kat = KAT[r[1]] ? r[1] : "lain";
    return { slug: r[0], cat: kat, name: r[2] || toName(r[0]), dur: r[3] || CFG.durasi,
             src: CFG.cdnBase + r[0] + ".mp4", poster: CFG.posterBase + r[0] + ".webp" };
  });
  const bySlug = {}; videos.forEach(function (v) { bySlug[v.slug] = v; });

  function waMessage(v) {
    const k = KAT[v.cat] ? KAT[v.cat].label : "";
    return waPesan([
      "Saya mau order *Video Ucapan* 🥰:",
      "",
      "\u2022 Judul: *" + v.name + "*",
      k ? "\u2022 Kategori: " + k : null,
      "\u2022 Durasi: " + v.dur,
      "",
      "Mohon info harga & prosesnya ya 🤗"
    ]);
  }

  /* ---------- Pemutar video ---------- */
  const player = document.getElementById("vplayer");
  const media = document.getElementById("vplayer-video");
  let lastFocus = null;
  function openPlayer(v) {
    lastFocus = document.activeElement;
    document.getElementById("vplayer-title").textContent = v.name;
    document.getElementById("vplayer-kat").textContent = "Ucapan " + (KAT[v.cat] ? KAT[v.cat].label : "Spesial");
    document.getElementById("vplayer-dur").textContent = "Durasi " + v.dur + " (menit:detik)";
    document.getElementById("vplayer-wa").href = waLink(waMessage(v));
    media.poster = v.poster;
    media.src = v.src;          /* src baru dipasang saat dibuka: nol bandwidth sebelum diklik */
    player.hidden = false; document.body.classList.add("has-picker");
    player.querySelector(".vplayer__close").focus();
    const play = media.play(); if (play && play.catch) play.catch(function () { /* autoplay diblokir: tombol play bawaan tetap ada */ });
  }
  function closePlayer() {
    if (player.hidden) return;
    media.pause(); media.removeAttribute("src"); media.load();
    player.hidden = true; document.body.classList.remove("has-picker");
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  player.addEventListener("click", function (e) {
    if (e.target.closest("[data-close]")) closePlayer();
    if (e.target.closest("#vplayer-wa, #vplayer-form")) setTimeout(closePlayer, 0);
  });
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") closePlayer(); });

  /* ---------- Kartu ---------- */
  function card(v) {
    const k = KAT[v.cat] || KAT.lain;
    return '<article class="video-card" data-cat="' + esc(v.cat) + '">' +
      '<button class="video-card__media" type="button" data-play="' + esc(v.slug) + '" aria-label="Putar video ' + esc(v.name) + '">' +
        '<img src="' + esc(v.poster) + '" alt="" loading="lazy" width="540" height="960">' +
        '<span class="video-card__play"><span><svg aria-hidden="true"><use href="#i-play-fill"/></svg></span></span>' +
        '<span class="video-card__dur">' + esc(v.dur) + '</span>' +
      '</button>' +
      '<div class="video-card__body">' +
        '<div class="video-card__top"><h3>' + esc(v.name) + '</h3><span class="tag ' + k.tag + '">' + esc(k.label) + '</span></div>' +
        '<div class="video-card__actions">' +
          '<a class="btn btn--primary btn--sm" target="_blank" rel="noopener"' +
            ' href="' + esc(waLink(waMessage(v))) + '">Pesan video ini</a>' +
        '</div>' +
      '</div></article>';
  }
  function bindPlay(root) {
    root.addEventListener("click", function (e) {
      const b = e.target.closest("[data-play]"); if (!b) return;
      const v = bySlug[b.dataset.play]; if (v) openPlayer(v);
    });
  }

  /* ---------- Seksi teaser di landing page ---------- */
  const teaser = document.getElementById("video-teaser");
  if (teaser) {
    teaser.innerHTML = videos.slice(0, CFG.teaser).map(card).join("");
    bindPlay(teaser);
  }
  document.querySelectorAll("[data-video-total]").forEach(function (el) { el.textContent = videos.length + " video"; });

  /* ---------- Halaman katalog ---------- */
  const page = document.getElementById("katalog-video");
  const grid = document.getElementById("vcat-grid");
  const more = document.getElementById("vcat-more");
  const q = document.getElementById("vcat-q");
  const countEl = document.getElementById("vcat-count");
  const empty = document.getElementById("vcat-empty");
  const filters = document.getElementById("vcat-filters");
  let state = { cat: "all", q: "", shown: 0, list: [] };

  /* Chip filter dibuat otomatis — hanya kategori yang punya video yang tampil. */
  const counts = {}; videos.forEach(function (v) { counts[v.cat] = (counts[v.cat] || 0) + 1; });
  const chips = [{ key: "all", label: "Semua", n: videos.length }].concat(
    Object.keys(KAT).filter(function (k) { return counts[k]; })
      .map(function (k) { return { key: k, label: KAT[k].label, n: counts[k] }; }));
  filters.innerHTML = chips.map(function (c, i) {
    return '<button class="catalog-chip" type="button" data-vfilter="' + esc(c.key) + '" aria-pressed="' + (i === 0) + '">' +
      esc(c.label) + ' <span>' + c.n + '</span></button>';
  }).join("");
  const fbtns = filters.querySelectorAll("[data-vfilter]");

  page.querySelectorAll(".js-video-wa").forEach(function (a) {
    a.href = waLink(waPesan("Saya mau tanya-tanya soal video ucapan."));
    a.target = "_blank"; a.rel = "noopener";
  });

  function render(reset) {
    if (reset) {
      const s = state.q.trim().toLowerCase();
      state.list = videos.filter(function (v) {
        return (state.cat === "all" || v.cat === state.cat) &&
          (!s || v.name.toLowerCase().indexOf(s) > -1 || v.slug.indexOf(s.replace(/\s+/g, "-")) > -1 ||
           (KAT[v.cat] && KAT[v.cat].label.toLowerCase().indexOf(s) > -1));
      });
      state.shown = 0; grid.innerHTML = "";
    }
    const next = state.list.slice(state.shown, state.shown + CFG.pageSize);
    grid.insertAdjacentHTML("beforeend", next.map(card).join(""));
    state.shown += next.length;
    /* Sembunyikan tombol DAN pembungkusnya bila semua item sudah tampil. */
    more.parentElement.hidden = state.shown >= state.list.length;
    empty.hidden = state.list.length > 0;
    countEl.textContent = state.list.length ? "Menampilkan " + state.shown + " dari " + state.list.length + " video" : "";
  }
  function setCat(c) {
    state.cat = c;
    fbtns.forEach(function (b) { b.setAttribute("aria-pressed", String(b.dataset.vfilter === c)); });
    render(true);
  }
  fbtns.forEach(function (b) { b.addEventListener("click", function () { setCat(b.dataset.vfilter); }); });
  let qt; q.addEventListener("input", function () { clearTimeout(qt); qt = setTimeout(function () { state.q = q.value; render(true); }, 150); });
  more.addEventListener("click", function () { render(false); });
  bindPlay(grid);

  /* ---------- Routing #katalog-video (berjalan paling akhir) ---------- */
  let rendered = false;
  const BASE_TITLE = window.JJ_TITLE || "";
  function videoRoute(fromLoad) {
    const on = location.hash.indexOf("#katalog-video") === 0;
    const was = document.body.classList.contains("is-video");
    closePlayer();
    document.body.classList.toggle("is-video", on);
    page.hidden = !on;
    if (on) {
      const m = location.hash.match(/kategori=([a-z-]+)/);
      if (!rendered || m) { rendered = true; setCat(m && KAT[m[1]] ? m[1] : state.cat); }
      document.title = "Katalog Video Ucapan — JANJIARA";
      if (!was || fromLoad) window.scrollTo({ top: 0, behavior: "instant" });
    } else if (was) {
      /* Halaman lain (#order / #katalog-tema) punya routing sendiri — jangan diganggu. */
      const other = location.hash.indexOf("#order") === 0 || location.hash.indexOf("#katalog-tema") === 0;
      if (other) return;
      if (BASE_TITLE) document.title = BASE_TITLE;
      const id = location.hash.slice(1).split("?")[0];
      const el = id && id !== "top" ? document.getElementById(id) : null;
      requestAnimationFrame(function () {
        el ? el.scrollIntoView({ behavior: "instant" }) : window.scrollTo({ top: 0, behavior: "instant" });
      });
    }
  }
  window.addEventListener("hashchange", function () { videoRoute(false); });
  videoRoute(true);
})();
</script>
<script>
/* =====================================================================
   JANJIARA v7 — promo opening otomatis, intro amplop, transisi halaman
   ===================================================================== */
/* PROMO OPENING — satu-satunya tempat mengatur periode promo.
   kuotaHabis: ubah ke true bila 10 pelanggan pertama sudah terpenuhi sebelum 4 November;
   halaman langsung memakai harga normal. */
const JJ_PROMO = {
  mulai: "2026-10-21T19:00:00+07:00",
  selesai: "2026-11-04T19:00:00+07:00",
  kuota: 10,
  kuotaHabis: false
};

(function () {
  const q = function (s, r) { return (r || document).querySelector(s); };
  const qa = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  const reduce = window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ---------------- promo: segera / aktif / selesai ---------------- */
  const tMulai = new Date(JJ_PROMO.mulai).getTime(), tSelesai = new Date(JJ_PROMO.selesai).getTime();
  const testNow = (location.search.match(/[?&]now=([^&]+)/) || [])[1];   // uji: ?now=2026-11-05T00:00:00%2B07:00
  const offset = testNow ? new Date(decodeURIComponent(testNow)).getTime() - Date.now() : 0;
  const now = function () { return Date.now() + offset; };
  function mode() {
    if (JJ_PROMO.kuotaHabis || now() >= tSelesai) return "selesai";
    return now() < tMulai ? "segera" : "aktif";
  }
  function pakaiHargaNormal() {
    qa(".price[data-normal]").forEach(function (p) { const s = q("strong", p); if (s) s.textContent = p.dataset.normal; });
    qa(".price-label, .price-normal, .opening-note").forEach(function (el) { el.hidden = true; });
    qa(".choice__price[data-normal]").forEach(function (el) { el.textContent = el.dataset.normal; });
    if (typeof PAKET === "object") Object.keys(PAKET).forEach(function (k) { PAKET[k].opening = PAKET[k].normal; });
    const sec = q('[data-promo="section"]'), badge = q('[data-promo="badge"]');
    if (sec) sec.hidden = true;
    if (badge) badge.hidden = true;
    document.documentElement.dataset.promo = "selesai";
  }
  const pad = function (n) { return (n < 10 ? "0" : "") + n; };
  let timer = null;
  function tick() {
    const m = mode();
    if (m === "selesai") { pakaiHargaNormal(); if (timer) clearInterval(timer); return; }
    document.documentElement.dataset.promo = m;
    const target = m === "segera" ? tMulai : tSelesai;
    let d = Math.max(0, Math.floor((target - now()) / 1000));
    const v = { d: Math.floor(d / 86400), h: Math.floor(d % 86400 / 3600), m: Math.floor(d % 3600 / 60), s: d % 60 };
    qa("[data-pt]").forEach(function (el) { el.textContent = pad(v[el.dataset.pt]); });
    const label = q('[data-promo="label"]'), bt = q('[data-promo="badge-text"]');
    if (label) label.textContent = m === "segera" ? "Harga opening dimulai dalam" : "Harga opening berakhir dalam";
    if (bt) bt.textContent = m === "segera" ? "Resmi buka Rabu, 21 Okt · 19.00 WIB" : "Resmi buka · Harga opening mulai Rp49rb";
  }
  tick();
  if (mode() !== "selesai") timer = setInterval(tick, 1000);

  /* ---------------- intro amplop ---------------- */
  const intro = document.getElementById("jj-intro");
  if (intro && !intro.hidden) {
    const html = document.documentElement;
    const sparks = q(".jj-intro__sparks", intro);
    for (let i = 0; i < 14; i++) {
      const s = document.createElement("i");
      s.style.left = (5 + Math.random() * 90) + "%";
      s.style.top = (10 + Math.random() * 80) + "%";
      s.style.animationDelay = (-Math.random() * 5).toFixed(2) + "s";
      sparks.appendChild(s);
    }
    let done = false;
    const remember = function () { try { localStorage.setItem("jj_intro_v1", "1"); } catch (e) {} };
    const finish = function () {
      intro.hidden = true;
      html.classList.remove("jj-intro-active");
      document.removeEventListener("keydown", onKey);
      const main = document.getElementById("utama");
      if (main) { main.setAttribute("tabindex", "-1"); main.focus({ preventScroll: true }); }
    };
    function open() {
      if (done) return; done = true; remember();
      intro.classList.add("is-opening");
      setTimeout(function () { intro.classList.add("is-revealing"); }, 1750);
      setTimeout(finish, 2600);
    }
    function skip() {
      if (done) return; done = true; remember();
      intro.classList.add("is-revealing");
      setTimeout(finish, 700);
    }
    function onKey(e) { if (e.key === "Escape") skip(); }
    q('[data-intro="open"]', intro).addEventListener("click", open);
    q('[data-intro="skip"]', intro).addEventListener("click", skip);
    q(".jj-env", intro).addEventListener("click", open);
    document.addEventListener("keydown", onKey);
    setTimeout(function () { const b = q('[data-intro="open"]', intro); if (b) b.focus({ preventScroll: true }); }, 50);
  }

  /* ---------------- transisi halaman (katalog / form order) ---------------- */
  if (!reduce) {
    window.addEventListener("hashchange", function () {
      const root = document.documentElement;
      root.classList.remove("jj-route-anim");
      void root.offsetWidth;
      root.classList.add("jj-route-anim");
      setTimeout(function () { root.classList.remove("jj-route-anim"); }, 800);
    });
  }
})();

</script>
<script>
/* =====================================================================
   JANJIARA v8 — Form Order lengkap + pembayaran interaktif
   - Isian dinamis: rangkaian acara (maks. 10), love story (maks. 8), rekening amplop (maks. 2)
   - Bagian/isian mengikuti paket (data-paket="Janji" / "Cerita Purnama" / "Purnama")
   - Rincian biaya otomatis: Janji lunas; Cerita & Purnama DP 50%; custom tema & add-on dibayar penuh di awal
   - Setelah form terkirim: pilih metode bayar, salin nomor/nominal, QRIS, lalu kirim bukti ke WhatsApp admin
   ===================================================================== */
/* REKENING & E-WALLET — satu-satunya tempat mengubah nomor tujuan pembayaran.
   Logo resmi (opsional): taruh file assets/pay/<id>.svg lalu tambahkan  logo: true  pada baris metodenya; tanpa itu tampil lencana nama. */
const JJ_BAYAR = [
  { id: "bca",       nama: "BCA",            jenis: "Transfer bank", nomor: "5530643664",   an: "NURCHOLIS", warna: "#0b5ea8" },
  { id: "jago",      nama: "Bank Jago",      jenis: "Transfer bank", nomor: "508285297189", an: "NURCHOLIS", warna: "#f2a100", ink: "#292A26" },
  { id: "dana",      nama: "DANA",           jenis: "E-wallet",      nomor: "08998038513",  an: "NURCHOLIS", warna: "#108ee9" },
  { id: "gopay",     nama: "GoPay",          jenis: "E-wallet",      nomor: "085121024405", an: "NURCHOLIS", warna: "#00a2c7" },
  { id: "shopeepay", nama: "ShopeePay",      jenis: "E-wallet",      nomor: "085110562033", an: "NURCHOLIS", warna: "#ee4d2d" },
  { id: "qris",      nama: "QRIS",           jenis: "Scan dari bank & e-wallet apa pun", qr: "assets/qris-shopeepay.png", an: "NURCHOLIS", warna: "#2F3429" },
  { id: "qris-toko", nama: "QRIS JANJIARA",  jenis: "Segera hadir", soon: true, warna: "#C6A66B", ink: "#292A26" }
];

(function () {
  const form = document.getElementById("order-form");
  if (!form) return;
  const view = document.getElementById("order");
  const reduce = window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches;
  const q = function (s, r) { return (r || document).querySelector(s); };
  const qa = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  const rp = function (n) { return "Rp" + Math.round(n).toLocaleString("id-ID"); };
  const angka = function (s) { return Number(String(s || "").replace(/[^0-9]/g, "")) || 0; };
  const esc = function (s) { return String(s).replace(/[&<>"]/g, function (c) { return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;" }[c]; }); };
  const fire = function () { form.dispatchEvent(new Event("input", { bubbles: true })); };

  /* ---------------- isian dinamis ---------------- */
  const LIST = {
    acara: { box: "#jj-acara-extra", max: 10, judul: "Rangkaian acara", fields: [
      ["Nama acara", "text", "Contoh: Resepsi", "full"], ["Tanggal", "date", ""], ["Waktu", "text", "Contoh: 11.00 – 14.00 WIB"],
      ["Nama tempat", "text", "Nama gedung / rumah"], ["Link Google Maps", "url", "https://maps.app.goo.gl/..."], ["Alamat", "textarea", "Alamat lengkap", "full"]] },
    story: { box: "#jj-story-list", max: 8, judul: "Babak cerita", fields: [
      ["Judul", "text", "Contoh: Pertama bertemu"], ["Waktu / periode", "text", "Contoh: Maret 2021"], ["Cerita singkat", "textarea", "Ceritakan momen ini dalam 1–3 kalimat", "full"]] },
    rek: { box: "#jj-rek-list", max: 2, judul: "Rekening amplop", fields: [
      ["Bank / e-wallet", "text", "Contoh: BCA / DANA"], ["Nomor", "text", "Nomor rekening / HP"], ["Atas nama", "text", "Nama pemilik", "full"]] }
  };
  function renumber(kind) {
    const cfg = LIST[kind];
    qa(".dyn-item", q(cfg.box)).forEach(function (it, i) {
      q(".dyn-item__title", it).textContent = cfg.judul + " " + (i + (kind === "acara" ? 2 : 1));
      qa("[data-f]", it).forEach(function (el) { el.dataset.label = cfg.judul + " " + (i + (kind === "acara" ? 2 : 1)) + ": " + el.dataset.f; });
    });
    const btn = q('[data-add="' + kind + '"]');
    const n = qa(".dyn-item", q(cfg.box)).length;
    btn.disabled = n >= cfg.max;
    btn.classList.toggle("is-full", n >= cfg.max);
  }
  function addItem(kind) {
    const cfg = LIST[kind], box = q(cfg.box);
    if (qa(".dyn-item", box).length >= cfg.max) return;
    const it = document.createElement("div");
    it.className = "dyn-item";
    let html = '<div class="dyn-item__head"><b class="dyn-item__title"></b><button type="button" class="dyn-item__del" aria-label="Hapus">Hapus</button></div><div class="field-grid">';
    cfg.fields.forEach(function (f) {
      const ctl = f[1] === "textarea" ? '<textarea rows="2" placeholder="' + esc(f[2]) + '" data-f="' + esc(f[0]) + '"></textarea>'
        : '<input type="' + f[1] + '" placeholder="' + esc(f[2]) + '" data-f="' + esc(f[0]) + '">';
      html += '<label class="field' + (f[3] ? " field--full" : "") + '"><span>' + esc(f[0]) + "</span>" + ctl + "</label>";
    });
    it.innerHTML = html + "</div>";
    box.appendChild(it);
    renumber(kind);
    if (!reduce) it.classList.add("is-new");
    const first = q("input,textarea", it); if (first) first.focus({ preventScroll: false });
    q(".dyn-item__del", it).addEventListener("click", function () {
      it.classList.add("is-leaving");
      setTimeout(function () { it.remove(); renumber(kind); fire(); }, reduce ? 0 : 260);
    });
    fire();
  }
  qa("[data-add]").forEach(function (b) { b.addEventListener("click", function () { addItem(b.dataset.add); }); });
  Object.keys(LIST).forEach(renumber);

  /* ---------------- tampil/sembunyi sesuai paket ---------------- */
  function paket() { const r = q('input[name="paket"]:checked', form); return r ? r.value : ""; }
  function applyPaket() {
    const pk = paket();
    qa("[data-paket]", form).forEach(function (el) {
      const on = !pk || el.dataset.paket.split(" ").indexOf(pk) > -1;
      el.hidden = !on;
      qa("input,select,textarea,button", el).forEach(function (c) {
        if (c.closest(".order-group") && c.closest(".order-group").hidden) return;   // jangan ganggu setCategory()
        c.disabled = !on;
        if (!on && c.type === "checkbox") c.checked = false;
      });
    });
    if (!pk) qa("[data-add]").forEach(function (b) { b.disabled = false; });
    Object.keys(LIST).forEach(function (k) { if (!q('[data-add="' + k + '"]').closest("[hidden]")) renumber(k); });
    const jn = q(".js-janji-note", form); if (jn) jn.hidden = pk !== "Janji";
    const ct = form.elements.custom_tema, opts = q(".js-custom-opts", form);
    const ctOn = !!ct.value && !ct.disabled;
    opts.hidden = !ctOn;
    qa("input", opts).forEach(function (c) { c.disabled = !ctOn; if (!ctOn) c.checked = false; });
    musik();
  }
  function musik() {
    const m = q('input[name="musik_mode"]:checked', form), box = q(".js-musik-detail", form);
    const need = m && m.value !== "Tanpa musik";
    box.hidden = !need;
    form.elements.musik.disabled = !need;
    q(".js-musik-label", form).textContent = m && m.value === "Link YouTube" ? "Link YouTube" : "Judul lagu";
    form.elements.musik.placeholder = m && m.value === "Link YouTube" ? "https://youtube.com/watch?v=..." : "Contoh: A Thousand Years (instrumental)";
    const ad = form.elements.ad_musik;
    q(".js-musik-janji", form).hidden = !(need && paket() === "Janji" && !(ad && ad.checked));
  }

  /* ---------------- rincian biaya ---------------- */
  function bill() {
    const pk = paket();
    const rows = [];
    let total = 0, now = 0, later = 0;
    if (pk && typeof PAKET === "object" && PAKET[pk]) {
      const harga = angka(PAKET[pk].opening);
      rows.push(["Paket " + pk + (PAKET[pk].opening !== PAKET[pk].normal ? " (harga opening)" : ""), harga]);
      total += harga;
      if (pk === "Janji") now += harga; else { const dp = Math.ceil(harga / 2); now += dp; later = harga - dp; }
    }
    const ct = form.elements.custom_tema;
    if (ct.value && !ct.disabled) { const h = angka(ct.options[ct.selectedIndex].dataset.harga); rows.push(["Custom tema · " + ct.value.replace(/\s*\(.*\)/, ""), h]); total += h; now += h; }
    qa("input[data-harga]:checked", form).forEach(function (c) {
      if (c.disabled) return;
      const h = angka(c.dataset.harga);
      rows.push([c.value.replace(/\s*\(.*\)/, "").replace(/^Ya$/, c.dataset.label.replace(/^.*opsi /, "Opsi ")), h]);
      total += h; now += h;
    });
    return { pk: pk, rows: rows, total: total, now: now, later: later };
  }
  function renderBill() {
    const b = bill();
    const box = q(".js-bill-rows");
    box.innerHTML = b.rows.length ? b.rows.map(function (r) { return '<div class="sum-bill__row"><span>' + esc(r[0]) + "</span><b>" + rp(r[1]) + "</b></div>"; }).join("")
      : '<p class="sum-bill__empty">Pilih paket untuk melihat rincian biaya.</p>';
    q(".js-bill-total").textContent = rp(b.total);
    const nowEl = q(".js-bill-now");
    if (nowEl.textContent !== rp(b.now)) { nowEl.textContent = rp(b.now); if (!reduce) { nowEl.classList.remove("is-bump"); void nowEl.offsetWidth; nowEl.classList.add("is-bump"); } }
    const later = q(".js-bill-later");
    later.hidden = !b.later;
    later.textContent = b.later ? "Pelunasan " + rp(b.later) + " setelah draft disetujui." : "";
    form.elements._total.value = b.total ? rp(b.total) : "";
    form.elements._bayar.value = b.now ? rp(b.now) + (b.pk === "Janji" ? " (lunas)" : b.pk ? " (DP 50% paket" + (b.rows.length > 1 ? " + custom/add-on" : "") + ")" : "") : "";
    form.elements._sisa.value = b.later ? rp(b.later) : "";
    form.elements._sisa.disabled = !b.later;
    return b;
  }

  form.addEventListener("change", function (e) {
    if (e.target.name === "paket" || e.target.name === "custom_tema" || e.target.name === "kategori") applyPaket();
    if (e.target.name === "musik_mode" || e.target.name === "ad_musik") musik();
    if (e.target.matches(".addon-pick input")) e.target.closest(".addon-pick").classList.toggle("is-on", e.target.checked);
    renderBill();
  });
  form.addEventListener("input", renderBill);
  window.addEventListener("hashchange", function () { setTimeout(function () { applyPaket(); renderBill(); }, 0); });
  applyPaket(); renderBill();
  /* segarkan ringkasan lama setelah semua script (harga promo/normal) siap */
  setTimeout(fire, 0);

  /* ---------------- pembayaran (setelah form terkirim) ---------------- */
  const success = q(".order-success", view);
  const grid = q(".pay-grid", success), detail = q(".pay-detail", success);
  const doneBtn = q(".js-pay-done", success), laterBtn = q(".js-order-wa", success);
  let pilih = null, lastBill = null;

  function logo(m) {
    return '<span class="pay-logo" style="--pay:' + m.warna + ";--pay-ink:" + (m.ink || "#fff") + '">' + (m.logo ? '<img src="assets/pay/' + m.id + '.svg" alt="" onerror="this.remove()">' : '') + '<span>' + esc(m.nama) + "</span></span>";
  }
  grid.innerHTML = JJ_BAYAR.map(function (m, i) {
    return '<button type="button" class="pay-opt' + (m.soon ? " is-soon" : "") + '" role="radio" aria-checked="false" data-id="' + m.id + '"' + (m.soon ? ' aria-disabled="true"' : "") + ' style="--i:' + i + '">' +
      logo(m) + '<span class="pay-opt__type">' + esc(m.jenis) + "</span>" + (m.soon ? '<span class="pay-opt__soon">Segera hadir</span>' : "") + "</button>";
  }).join("");

  function fmtNo(n) { return n.length > 10 ? n.replace(/(\d{4})(?=\d)/g, "$1 ") : n.replace(/(\d{3,4})(?=(\d{3})+$)/g, "$1 "); }
  async function copyText(t, btn, okLabel) {
    try { await navigator.clipboard.writeText(t); }
    catch (e) { const ta = document.createElement("textarea"); ta.value = t; document.body.appendChild(ta); ta.select(); try { document.execCommand("copy"); } catch (x) {} ta.remove(); }
    if (!btn) return;
    const lab = q("span", btn), old = lab.textContent;
    btn.classList.add("is-copied"); lab.textContent = okLabel || "Tersalin";
    setTimeout(function () { btn.classList.remove("is-copied"); lab.textContent = old; }, 1800);
  }
  function showDetail(m) {
    pilih = m;
    qa(".pay-opt", grid).forEach(function (b) { const on = b.dataset.id === m.id; b.classList.toggle("is-on", on); b.setAttribute("aria-checked", String(on)); });
    let body;
    if (m.qr) {
      body = '<div class="pay-qr"><button type="button" class="pay-qr__img" data-zoom aria-label="Perbesar QRIS"><img src="' + m.qr + '" alt="QRIS pembayaran JANJIARA atas nama ' + esc(m.an) + '" loading="lazy"></button>' +
        '<div class="pay-qr__info"><b>Scan QRIS</b><p>Buka m-banking atau e-wallet apa pun, pilih <i>Scan QR</i>, lalu masukkan nominal <b>' + rp(lastBill ? lastBill.now : 0) + '</b>. Pastikan nama penerima <b>' + esc(m.an) + '</b>.</p>' +
        '<div class="pay-qr__btns"><button type="button" class="pay-copy" data-zoom><svg aria-hidden="true"><use href="#i-image"/></svg><span>Perbesar</span></button>' +
        '<a class="pay-copy" href="' + m.qr + '" download="QRIS-JANJIARA.png"><svg aria-hidden="true"><use href="#i-arrow"/></svg><span>Simpan QR</span></a></div></div></div>';
    } else {
      body = '<div class="pay-acc">' + logo(m) + '<div class="pay-acc__no"><small>' + esc(m.jenis) + '</small><b>' + fmtNo(m.nomor) + '</b><span>a.n. ' + esc(m.an) + "</span></div>" +
        '<button type="button" class="pay-copy" data-copy="' + m.nomor + '"><svg aria-hidden="true"><use href="#i-check"/></svg><span>Salin nomor</span></button></div>' +
        (m.jenis === "E-wallet" ? '<p class="pay-tip">Kirim lewat aplikasi ' + esc(m.nama) + ' ke nomor di atas, atau transfer dari m-banking memakai menu top up/transfer ' + esc(m.nama) + ".</p>" : '<p class="pay-tip">Transfer tepat ' + rp(lastBill ? lastBill.now : 0) + " agar admin mudah mencocokkan pembayaranmu.</p>");
    }
    detail.innerHTML = body;
    detail.hidden = false;
    if (!reduce) { detail.classList.remove("is-in"); void detail.offsetWidth; detail.classList.add("is-in"); }
    doneBtn.removeAttribute("aria-disabled");
    q("[data-copy]", detail) && q("[data-copy]", detail).addEventListener("click", function () { copyText(this.dataset.copy, this, "Nomor tersalin"); });
    qa("[data-zoom]", detail).forEach(function (z) { z.addEventListener("click", zoomQR); });
  }
  grid.addEventListener("click", function (e) {
    const b = e.target.closest(".pay-opt"); if (!b) return;
    const m = JJ_BAYAR.find(function (x) { return x.id === b.dataset.id; });
    if (m.soon) { b.classList.remove("is-shake"); void b.offsetWidth; b.classList.add("is-shake"); return; }
    showDetail(m);
  });
  q("[data-copy-amount]", success).addEventListener("click", function () { copyText(String(lastBill ? lastBill.now : 0), this, "Nominal tersalin"); });

  function zoomQR() {
    const m = pilih; if (!m || !m.qr) return;
    const dlg = document.createElement("div");
    dlg.className = "pay-zoom"; dlg.setAttribute("role", "dialog"); dlg.setAttribute("aria-label", "QRIS diperbesar");
    dlg.innerHTML = '<div class="pay-zoom__card"><img src="' + m.qr + '" alt="QRIS pembayaran"><p>Nominal: <b>' + rp(lastBill ? lastBill.now : 0) + '</b> · a.n. ' + esc(m.an) + '</p><button type="button" class="btn btn--primary btn--sm">Tutup</button></div>';
    document.body.appendChild(dlg);
    const close = function () { dlg.classList.add("is-out"); setTimeout(function () { dlg.remove(); }, 200); document.removeEventListener("keydown", onEsc); };
    const onEsc = function (e) { if (e.key === "Escape") close(); };
    dlg.addEventListener("click", function (e) { if (e.target === dlg || e.target.tagName === "BUTTON") close(); });
    document.addEventListener("keydown", onEsc);
    q("button", dlg).focus();
  }

  /* isi nominal saat halaman pembayaran tampil (form sudah lolos validasi & terkirim) */
  const obs = new MutationObserver(function () {
    if (success.hidden) return;
    lastBill = bill();
    q(".js-pay-now", success).textContent = rp(lastBill.now);
    q(".js-pay-note", success).textContent = lastBill.pk === "Janji" ? "Paket Janji dibayar lunas" + (lastBill.rows.length > 1 ? " + add-on" : "")
      : lastBill.pk ? "DP 50% paket" + (lastBill.rows.length > 1 ? " + custom tema/add-on" : "") + " · pelunasan " + rp(lastBill.later) + " setelah draft disetujui" : "";
    pilih = null; detail.hidden = true; detail.innerHTML = "";
    qa(".pay-opt", grid).forEach(function (b) { b.classList.remove("is-on"); b.setAttribute("aria-checked", "false"); });
    doneBtn.setAttribute("aria-disabled", "true");
    success.classList.remove("is-sealed");
    success.classList.remove("is-enter"); void success.offsetWidth; success.classList.add("is-enter");
  });
  obs.observe(success, { attributes: true, attributeFilter: ["hidden"] });

  function waBayar() {
    const base = laterBtn.getAttribute("href") || "";
    const m = base.match(/[?&]text=([^&]*)/);
    let text = m ? decodeURIComponent(m[1]) : "";
    const sender = (q("#pay-sender", success).value || "").trim();
    const blok = ["", "*Pembayaran*",
      "• Metode: " + pilih.nama + (pilih.nomor ? " (" + pilih.nomor + ")" : " (scan QR)"),
      "• Nominal: " + rp(lastBill.now) + (lastBill.pk === "Janji" ? " (lunas)" : " (DP 50%" + (lastBill.rows.length > 1 ? " + custom/add-on" : "") + ")"),
      sender ? "• Nama pengirim: " + sender : null,
      "Bukti pembayaran saya lampirkan di chat ini."].filter(function (x) { return x !== null; }).join("\n");
    const tutup = typeof WA_GAYA === "object" ? WA_GAYA.tutup : "";
    text = tutup && text.lastIndexOf(tutup) > -1 ? text.slice(0, text.lastIndexOf(tutup)).replace(/\s+$/, "") + "\n" + blok + "\n\n" + tutup : text + "\n" + blok;
    return "https://wa.me/" + JANJIARA.waPhone + "?text=" + encodeURIComponent(text);
  }
  doneBtn.addEventListener("click", function (e) {
    e.preventDefault();
    if (!pilih) {
      grid.classList.remove("is-shake"); void grid.offsetWidth; grid.classList.add("is-shake");
      q(".pay-title", success).textContent = "Pilih cara bayar dulu, ya";
      return;
    }
    const url = waBayar();
    success.classList.add("is-sealed");
    setTimeout(function () { window.location.href = url; }, reduce ? 0 : 1300);
  });
})();

</script>
<script>
/* =====================================================================
   KARTU TEMA v9 — latar kartu mengikuti warna tiap tema (JJ_TEMA_WARNA)
   dan tebaran kelopak bunga saat kartu disentuh kursor (laptop) atau
   diketuk (HP), seperti kelopak yang ditabur saat pengantin berjalan
   pelan menuju pelaminan. Tombol Preview / Pilih Paket tidak terpengaruh.
   ===================================================================== */
(function () {
  const WARNA = (typeof JJ_TEMA_WARNA !== "undefined" && JJ_TEMA_WARNA) || {};   /* const tingkat atas tidak menempel di window */
  const reduce = window.matchMedia ? window.matchMedia("(prefers-reduced-motion: reduce)") : { matches: false };
  const rnd = function (a, b) { return a + Math.random() * (b - a); };

  function slugOf(src) { const m = String(src || "").match(/\/([a-z0-9-]+)\.webp(?:[?#]|$)/i); return m ? m[1].toLowerCase() : ""; }
  function tint(card) {
    if (card.dataset.tint) return;
    const img = card.querySelector(".theme-card__img img");
    const w = img && WARNA[slugOf(img.getAttribute("src"))];
    if (w) { card.style.setProperty("--tc", w[0]); card.style.setProperty("--tc2", w[1]); }
    card.dataset.tint = "1";
  }
  function tintAll(root) { (root || document).querySelectorAll(".theme-card").forEach(tint); }
  tintAll();
  ["themes", "catalog-grid"].forEach(function (id) {
    const el = document.getElementById(id);
    if (el && window.MutationObserver) new MutationObserver(function () { tintAll(el); }).observe(el, { childList: true });
  });

  const last = new WeakMap();
  function burst(card) {
    if (reduce.matches || !card || card.hidden) return;
    const now = Date.now();
    if (now - (last.get(card) || 0) < 1400) return;
    last.set(card, now);
    let layer = card.querySelector(":scope > .jj-petals");
    if (!layer) { layer = document.createElement("span"); layer.className = "jj-petals"; layer.setAttribute("aria-hidden", "true"); card.appendChild(layer); }
    const cs = getComputedStyle(card);
    const tc2 = cs.getPropertyValue("--tc2").trim() || "#C6A66B";
    const cols = ["#F4EAE9", "#D8B8B2", "#C6A66B", "#FFFDF9", tc2, "#EBCFC9"];
    const W = card.clientWidth, H = card.clientHeight;
    const n = W < 220 ? 12 : 18;
    const frag = document.createDocumentFragment();
    for (let i = 0; i < n; i++) {
      const p = document.createElement("i");
      p.className = "jj-petal";
      const kiri = i % 2 === 0;                       /* ditabur dari dua sisi, seperti tamu di kiri-kanan jalan */
      const dx = (kiri ? 1 : -1) * rnd(.12, .42) * W;
      const sway = rnd(10, 26);
      p.style.cssText =
        "--x:" + (kiri ? rnd(-4, 38) : rnd(58, 102)).toFixed(1) + "%;" +
        "--s:" + rnd(7, 13).toFixed(1) + "px;" +
        "--c:" + cols[(Math.random() * cols.length) | 0] + ";" +
        "--dx1:" + (dx * .4 + sway).toFixed(0) + "px;" +
        "--dx2:" + (dx * .75 - sway).toFixed(0) + "px;" +
        "--dx3:" + dx.toFixed(0) + "px;" +
        "--fall:" + (H * rnd(.7, 1.05)).toFixed(0) + "px;" +
        "--r0:" + rnd(0, 360).toFixed(0) + "deg;" +
        "--d:" + rnd(2.3, 3.4).toFixed(2) + "s;" +
        "--dl:" + (i * .07 + rnd(0, .18)).toFixed(2) + "s;";
      frag.appendChild(p);
    }
    layer.appendChild(frag);
    card.classList.remove("is-walk"); void card.offsetWidth; card.classList.add("is-walk");
    clearTimeout(card._jjPetalT);
    card._jjPetalT = setTimeout(function () { layer.textContent = ""; card.classList.remove("is-walk"); }, 4600);
  }
  window.JJ_taburKelopak = burst;

  /* Laptop: saat kursor masuk ke kartu */
  document.addEventListener("pointerover", function (e) {
    if (e.pointerType && e.pointerType !== "mouse") return;
    const c = e.target.closest && e.target.closest(".theme-card");
    if (!c || (e.relatedTarget && c.contains(e.relatedTarget))) return;
    burst(c);
  });
  /* HP / tablet: saat kartu diketuk (tombol di dalamnya tetap berfungsi) */
  document.addEventListener("pointerdown", function (e) {
    if (e.pointerType === "mouse") return;
    const c = e.target.closest && e.target.closest(".theme-card");
    if (c) burst(c);
  }, { passive: true });
  /* Keyboard: fokus pertama ke kartu */
  document.addEventListener("focusin", function (e) {
    const c = e.target.closest && e.target.closest(".theme-card");
    if (c && !c.contains(e.relatedTarget)) burst(c);
  });
})();
</script>
<script>
/* =====================================================================
   v10 (21 Okt 2026)
   1. Form Order: pilihan "Nama yang ditulis lebih dulu" benar-benar mengubah
      urutan kartu mempelai (dan urutan data di pesan WhatsApp), lengkap
      dengan pratinjau "Dimas & Rania".
   2. Landing page: daun & kelopak bertebaran pelan, seperti di katalog.
   ===================================================================== */
(function () {
  const reduce = window.matchMedia ? window.matchMedia("(prefers-reduced-motion: reduce)") : { matches: false };

  /* ---------------- 1. Urutan nama mempelai ---------------- */
  (function () {
    const form = document.getElementById("order-form");
    const sel = form && form.querySelector('select[name="urutan"]');
    if (!sel) return;
    const group = sel.closest(".order-group");
    const grid = group && group.querySelector(".couple-grid");
    const inPria = grid && grid.querySelector('input[name="pria_panggilan"]');
    const inWanita = grid && grid.querySelector('input[name="wanita_panggilan"]');
    if (!inPria || !inWanita) return;
    const pria = inPria.closest(".couple-card"), wanita = inWanita.closest(".couple-card");

    [pria, wanita].forEach(function (c) {
      const h = c.querySelector("h4");
      if (h && !h.querySelector(".couple-card__no")) h.insertAdjacentHTML("afterbegin", '<span class="couple-card__no" aria-hidden="true"></span>');
    });
    const prev = document.createElement("p");
    prev.className = "couple-order";
    prev.setAttribute("aria-live", "polite");
    sel.closest("label").insertAdjacentElement("afterend", prev);

    const esc = function (s) { return String(s).replace(/[&<>"']/g, function (c) { return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]; }); };
    function wanitaDulu() { return /^Mempelai wanita/.test(sel.value); }

    function render(animate) {
      const first = wanitaDulu() ? wanita : pria, second = first === pria ? wanita : pria;
      if (grid.firstElementChild !== first) {
        /* animasi tukar posisi (FLIP) */
        const before = new Map([[pria, pria.getBoundingClientRect()], [wanita, wanita.getBoundingClientRect()]]);
        grid.insertBefore(first, grid.firstElementChild);
        if (animate && !reduce.matches) {
          [pria, wanita].forEach(function (c) {
            const a = before.get(c), b = c.getBoundingClientRect();
            const dx = a.left - b.left, dy = a.top - b.top;
            if (!dx && !dy) return;
            c.classList.remove("is-swapping");
            c.style.transform = "translate(" + dx + "px," + dy + "px)";
            requestAnimationFrame(function () {
              requestAnimationFrame(function () { c.classList.add("is-swapping"); c.style.transform = ""; });
            });
            setTimeout(function () { c.classList.remove("is-swapping"); }, 650);
          });
        }
      }
      first.querySelector(".couple-card__no").textContent = "1";
      second.querySelector(".couple-card__no").textContent = "2";
      first.classList.toggle("is-first", !!sel.value);
      second.classList.remove("is-first");
      const nP = inPria.value.trim() || "Mempelai pria", nW = inWanita.value.trim() || "Mempelai wanita";
      const a = wanitaDulu() ? nW : nP, b = wanitaDulu() ? nP : nW;
      prev.innerHTML = sel.value
        ? 'Di undangan tertulis: <b>' + esc(a) + '</b><span class="amp">&amp;</span><b>' + esc(b) + '</b>'
        : 'Pilih urutan di atas. Kartu mempelai akan menyesuaikan.';
    }
    sel.addEventListener("change", function () { render(true); });
    inPria.addEventListener("input", function () { render(false); });
    inWanita.addEventListener("input", function () { render(false); });
    form.addEventListener("reset", function () { setTimeout(function () { render(false); }, 0); });
    render(false);
    window.JJ_urutanMempelai = render;
  })();

  /* ---------------- 2. Daun bertebaran di landing page ---------------- */
  (function () {
    if (!document.body || !("animate" in Element.prototype)) return;
    const layer = document.createElement("div");
    layer.className = "jj-daun";
    layer.setAttribute("aria-hidden", "true");
    document.body.appendChild(layer);

    const DAUN = ["#6B785D", "#869376", "#59664A", "#A3AE8F", "#7E8C69", "#C0C9B7"];
    const KELOPAK = ["#D8B8B2", "#E9D8D5", "#D7C3A0", "#F4EAE9"];
    const rnd = function (a, b) { return a + Math.random() * (b - a); };
    const pick = function (arr) { return arr[(Math.random() * arr.length) | 0]; };
    const html = document.documentElement, body = document.body;
    let timer = null;

    function aktif() {
      return !reduce.matches && !document.hidden &&
        !html.classList.contains("jj-intro-active") &&
        !body.classList.contains("is-order") && !body.classList.contains("is-catalog") &&
        !body.classList.contains("is-video") && !body.classList.contains("has-picker");
    }
    function kecil() { return window.innerWidth < 700; }
    function spawn() {
      if (!aktif()) return;
      if (layer.childElementCount >= (kecil() ? 6 : 11)) return;
      const kelopak = Math.random() < .28;
      const i = document.createElement("i");
      i.className = kelopak ? "is-kelopak" : "is-daun";
      const w = kecil() ? rnd(9, 15) : rnd(11, 20);
      const arah = Math.random() < .5 ? -1 : 1, sway = rnd(30, 90);
      const d = rnd(11, 17);
      i.style.cssText =
        "--x:" + rnd(-3, 100).toFixed(1) + "vw;--w:" + w.toFixed(1) + "px;--c:" + (kelopak ? pick(KELOPAK) : pick(DAUN)) + ";" +
        "--o:" + rnd(.45, .8).toFixed(2) + ";--r0:" + rnd(0, 360).toFixed(0) + "deg;" +
        "--s1:" + (arah * sway * .6).toFixed(0) + "px;--s2:" + (-arah * sway * .3).toFixed(0) + "px;" +
        "--s3:" + (arah * sway).toFixed(0) + "px;--s4:" + (arah * sway * .4).toFixed(0) + "px;" +
        "--d:" + d.toFixed(1) + "s;--f:" + rnd(1.6, 3.2).toFixed(1) + "s;";
      i.innerHTML = "<b></b>";
      i.addEventListener("animationend", function (e) { if (e.target === i) i.remove(); });
      layer.appendChild(i);
    }
    function start() {
      if (timer) return;
      timer = setInterval(spawn, kecil() ? 2400 : 1300);
    }
    function stop() { clearInterval(timer); timer = null; }
    function sync() {
      if (aktif()) { if (!timer) { spawn(); start(); } }
      else { stop(); if (body.classList.contains("is-order") || body.classList.contains("is-catalog") || body.classList.contains("is-video")) layer.textContent = ""; }
    }
    document.addEventListener("visibilitychange", sync);
    window.addEventListener("hashchange", function () { setTimeout(sync, 60); });
    if (window.MutationObserver) {
      new MutationObserver(sync).observe(html, { attributes: true, attributeFilter: ["class"] });
      new MutationObserver(sync).observe(body, { attributes: true, attributeFilter: ["class"] });
    }
    if (reduce.addEventListener) reduce.addEventListener("change", sync);
    let rz; window.addEventListener("resize", function () { clearTimeout(rz); rz = setTimeout(function () { stop(); sync(); }, 300); });
    sync();
    window.JJ_daun = { layer: layer, aktif: aktif };
  })();
})();
</script>
</body>
</html>
