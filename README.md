# Moodle Vietnamese Language Pack

Vietnamese language pack and custom language strings for **Moodle LMS 5.3.1+**.

This repository contains the completed Vietnamese custom language package used to translate Moodle 5.3.1+ core strings while preserving English values that are intentionally language-neutral, technical, or required by the platform.

## Features

- Covers the Moodle 5.3.1+ production language source.
- Includes all source string identifiers found in the Moodle 5.3.1+ core source used for this package.
- Includes Vietnamese translations for 41 strings that were missing from the original package.
- Preserves intentional English values such as time zones, country codes, technical identifiers, product names, and other values that should not be translated.
- Includes the `theme_academi.php` custom theme strings supplied with the original package.

## Repository layout

```text
MoodleVietHoa/
├── customlang/                         # Import-ready PHP language files
├── dist/
│   └── customlang_vi_moodle531_completed.zip
├── README.md                            # English documentation
└── README.vi.md                         # Vietnamese documentation
```

The files in `customlang/` are kept as a flat collection of PHP language files to match Moodle custom language import packages. The ZIP file in `dist/` is ready to import and preserves this layout.

## Installation

1. Download the latest ZIP from [`dist/customlang_vi_moodle531_completed.zip`](dist/customlang_vi_moodle531_completed.zip), or create a ZIP containing the PHP files directly inside `customlang/`.
2. In Moodle, sign in as an administrator.
3. Open **Site administration → Language → Language customisation**.
4. Select Vietnamese (`vi`) and load the language pack if required.
5. Import or apply the custom language strings according to your Moodle administration workflow.
6. Purge Moodle caches after importing the strings.

The exact menu labels can vary slightly depending on your Moodle administration language and installed plugins.

## Compatibility

- Target version: **Moodle LMS 5.3.1+**
- Source branch/release used for comparison: **MOODLE_5031 / Moodle 5.3.1+**
- Package format: Moodle custom language PHP files
- Encoding: UTF-8

This package is intended for Moodle 5.3.1+. Later Moodle versions may add, remove, or rename language string identifiers. Review the package against the target Moodle source before using it on another major or minor release.

## Coverage

The package was compared with the Moodle 5.3.1+ production language source:

- 490 production language files were compared.
- 33,159 source string identifiers were checked.
- 0 source identifiers remain missing in this completed package.
- 1,312 values remain identical to the English source by design or because they are language-neutral values.

“Complete” in this context means that every source string identifier has a corresponding entry. It does not mean that every technical value, proper name, code, or platform-specific token has been translated into Vietnamese.

## License and attribution

Moodle is distributed under the GNU General Public License v3. This repository contains language customisation files intended for use with Moodle. Please review the licensing terms of your Moodle installation and any third-party plugin or theme before redistributing modified files.

This project is an independent Vietnamese language customisation package and is not an official Moodle release.
