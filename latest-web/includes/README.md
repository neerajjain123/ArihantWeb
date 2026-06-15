# Component Usage Guide

## Overview
This guide explains how to use the reusable PHP components created for the latest-web template.

---

## Components Created

### 1. Header Component
**File:** `includes/header.php`

**Contains:**
- HTML head section with meta tags
- Topbar with social links
- Navigation menu with dropdowns
- WhatsApp "Book Now" button

**Required Variables:**
```php
$pageTitle = "Page Title | Arihant Travel";
$pageDescription = "Page description for SEO";
$pageKeywords = "keyword1, keyword2, keyword3";
$pageCanonical = "https://arihantlink.com/page-url";
$currentPage = "page-identifier"; // e.g., 'home', 'uae-visa', 'about'
```

---

### 2. Footer Component
**File:** `includes/footer.php`

**Contains:**
- Footer with 4 columns
- Social media links
- Copyright notice
- JavaScript libraries
- Back to top button

**No variables required** - works standalone

---

### 3. Breadcrumb Component
**File:** `includes/breadcrumb.php`

**Contains:**
- Page heading
- Breadcrumb navigation

**Required Variables:**
```php
$pageHeading = "UAE Visa Services";

// Optional - for nested pages
$breadcrumbCategory = "Services";
$breadcrumbCategoryLink = "services.php";
```

---

## How to Use - Example Page

### Example: UAE Visa Page

**File:** `latest-web/uae-visa.php`

```php
<?php
// 1. Define page variables
$pageTitle = "UAE Visa Services | Arihant Travel";
$pageDescription = "Fast and reliable UAE visa processing for tourists and business travelers";
$pageKeywords = "UAE visa, Dubai visa, tourist visa, business visa";
$pageCanonical = "https://arihantlink.com/uae-visa";
$currentPage = "uae-visa";

// 2. For breadcrumb
$pageHeading = "UAE Visa Services";
$breadcrumbCategory = "Services";
$breadcrumbCategoryLink = "services.php";
?>

<!-- 3. Include header -->
<?php include 'includes/header.php'; ?>

<!-- 4. Include breadcrumb -->
<?php include 'includes/breadcrumb.php'; ?>

<!-- 5. Your page content goes here -->
<div class="container-fluid py-5">
    <div class="container">
        <h2>Welcome to UAE Visa Services</h2>
        <p>Your content here...</p>
    </div>
</div>

<!-- 6. Include footer -->
<?php include 'includes/footer.php'; ?>
```

---

## Active Navigation Highlighting

The `$currentPage` variable automatically highlights the active menu item.

**Supported values:**
- `home` - Highlights "Home"
- `uae-visa` - Highlights "UAE Visa"
- `about` - Highlights "About"
- `contact` - Highlights "Contact"
- `blog` - Highlights "Blog"

**Example:**
```php
$currentPage = "uae-visa"; // UAE Visa link will have 'active' class
```

---

## Breadcrumb Examples

### Simple Breadcrumb (2 levels)
```php
$pageHeading = "About Us";
// No category needed
```
**Output:** Home > About Us

### Nested Breadcrumb (3 levels)
```php
$pageHeading = "UAE Visa Services";
$breadcrumbCategory = "Services";
$breadcrumbCategoryLink = "services.php";
```
**Output:** Home > Services > UAE Visa Services

---

## Complete Page Template

```php
<?php
// Page variables
$pageTitle = "Your Page Title | Arihant Travel";
$pageDescription = "Your page description";
$pageKeywords = "keyword1, keyword2";
$pageCanonical = "https://arihantlink.com/your-page";
$currentPage = "page-id";
$pageHeading = "Your Page Heading";
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>

<!-- Main Content Start -->
<div class="container-fluid py-5">
    <!-- Your content sections -->
</div>
<!-- Main Content End -->

<?php include 'includes/footer.php'; ?>
```

---

## Benefits

✅ **Update once, applies everywhere**
   - Change navigation menu in one file
   - Update footer links in one place

✅ **Consistent design**
   - All pages use same header/footer
   - Uniform styling across site

✅ **Easy SEO management**
   - Dynamic meta tags per page
   - Proper canonical URLs

✅ **Faster development**
   - Create new pages quickly
   - Focus on content, not structure

---

## Next Steps

1. **Test the components** - Create a test page
2. **Create UAE Visa page** - First complete service page
3. **Replicate for other services** - Desert Safari, City Tours, etc.
4. **Customize footer** - Update links and contact info
5. **Update social media links** - Add real URLs

---

## File Structure

```
latest-web/
├── includes/
│   ├── header.php       ✅ Created
│   ├── footer.php       ✅ Created
│   └── breadcrumb.php   ✅ Created
├── index.php
├── uae-visa.php         ⏳ Next to create
├── desert-safari.php
└── ...
```

---

## Tips

1. **Always define variables before including header**
2. **Use descriptive $currentPage values**
3. **Keep $pageTitle under 60 characters for SEO**
4. **Make $pageDescription 150-160 characters**
5. **Update canonical URL for each page**
