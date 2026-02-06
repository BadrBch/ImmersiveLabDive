# DIVE25 - De Vinci Immersive Lab Website

Website for the De Vinci Immersive Lab showcasing XR research, projects, and events.

## Quick Start

### Run the Website Locally

```bash
# Start the PHP development server
php -S localhost:8000

# Open in browser
open http://localhost:8000
```

### Requirements

- **PHP 7.4+** (for the website)
- **Python 3.6+** with `openpyxl` (for content sync)

```bash
pip install openpyxl
```

---

## Editing Content

All website content is managed through an Excel file. **Do not edit PHP files directly.**

### Step 1: Edit the Excel File

Open `DIVE25_Database.xlsx` and edit any of the 7 sheets:

| Sheet | Content |
|-------|---------|
| HOME | Hero section, registration, pillars |
| ABOUT | Lab description, facilities |
| EDUCATION | Hardware, programs, resources |
| RESEARCH | Research projects, partners |
| PROJECTS | Video showcase, categories |
| EVENTS | Calendar, highlights, contacts |
| CONTACTS | Team members, address |

### Step 2: Save & Sync

After editing, save the Excel file and run:

```bash
python3 sync_all_content.py
```

This regenerates `data/content.php` with your changes.

### Step 3: Refresh the Website

Refresh your browser to see the updated content.

---

## Project Structure

```
├── DIVE25_Database.xlsx    # Edit this file to change content
├── sync_all_content.py     # Run this to sync Excel to PHP
├── data/content.php        # Auto-generated, don't edit
├── index.php               # Homepage
├── research.php            # Research page
├── projects.php            # Projects page
├── events.php              # Events page
├── education.php           # Education page
├── contact.php             # Contact page
└── ...
```

---

## Links

- **Live Site**: [Coming Soon]
- **De Vinci Immersive Lab**: [YouTube Channel](https://www.youtube.com/@DeVinciImmersiveLab)
