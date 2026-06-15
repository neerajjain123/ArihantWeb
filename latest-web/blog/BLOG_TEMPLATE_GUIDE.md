# Blog Template Guide

## Overview
This guide explains how to use the `blog-template.php` file to create new blog posts for the Arihant Travel website. The template is based on the successful Dubai Honeymoon blog structure with key improvements.

## Key Features

### 1. **Brand Colors Only**
The template strictly uses only the official brand colors defined in `style.css`:

- **Primary**: `#13357B` (Deep Blue) - Used for main headings, primary buttons, and key UI elements
- **Secondary**: `#2596be` (Teal Blue) - Used for secondary buttons and accents
- **Success**: `#4CAF50` (Green) - Used for success states and WhatsApp buttons
- **Light**: `#F8F9FA` - Background color for sections
- **Dark**: `#212529` - Text color

**Badge Color Classes Available:**
- `bg-primary` - Deep blue
- `bg-secondary` - Teal blue
- `bg-success` - Green
- `bg-danger` - Red (for romantic/special content)
- `bg-warning` - Orange
- `bg-info` - Info blue

### 2. **Breadcrumbs Below Hero Banner**
Unlike the old structure, breadcrumbs are now positioned **below** the hero banner for better visual hierarchy:
```
Hero Banner (with title, meta, social share)
    ↓
Breadcrumbs (Home > Blog > Category)
    ↓
Featured Image
    ↓
Main Content
```

### 3. **Subscribe Section at Bottom**
A full-width subscribe section is added at the bottom of every blog post (before the footer) to capture email leads.

## How to Create a New Blog Post

### Step 1: Copy the Template
```bash
cp blog-template.php your-new-blog-post.php
```

### Step 2: Update SEO Variables (Lines 8-13)
```php
$pageTitle = "Your Blog Title | Arihant Travel";
$pageDescription = "SEO-optimized description (150-160 characters)";
$pageKeywords = "keyword1, keyword2, keyword3";
$pageCanonical = "https://arihantlink.com/blog/your-blog-slug";
$currentPage = "blog";
```

### Step 3: Update Blog Meta Information (Lines 16-25)
```php
$blogTitle = "Your Blog Post Title";
$blogCategory = "Dubai Tours"; // Choose from: Dubai Tours, Jain-Friendly, International, Visa Guide
$blogCategoryClass = "primary"; // Choose badge color: primary, secondary, success, danger, warning, info
$blogAuthor = "Arihant Travel Team";
$blogDate = "December 22, 2025";
$blogReadTime = "10 min read"; // Calculate based on word count (avg 200 words/min)
$blogFeaturedImage = "../img/blogs/your-folder/featured-image.jpg";
$blogImageAlt = "Descriptive alt text for SEO";
$blogExcerpt = "Compelling excerpt that appears in hero section";
```

### Step 4: Update Tags (Line 28)
```php
$blogTags = ["Dubai", "Travel", "Tourism", "Family", "Jain-Friendly"];
```

### Step 5: Update Related Posts (Lines 31-42)
```php
$relatedPosts = [
    [
        'title' => 'Related Post Title 1',
        'url' => 'blog-post-slug-1',
        'image' => '../img/blogs/related-1.jpg',
        'category' => 'Dubai Tours'
    ],
    [
        'title' => 'Related Post Title 2',
        'url' => 'blog-post-slug-2',
        'image' => '../img/blogs/related-2.jpg',
        'category' => 'Adventure'
    ]
];
```

### Step 6: Write Your Content
Replace the example sections with your actual content. The template provides several content components you can use:

## Content Components

### 1. **Section with Heading**
```php
<section id="section-id" class="mb-5">
    <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
        1. Section Title
    </h2>
    <p>Your content here...</p>
</section>
```

### 2. **Subsection**
```php
<h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Subsection Title</h3>
<p>Subsection content...</p>
```

### 3. **Image with Caption**
```php
<figure class="my-4">
    <img src="../img/blogs/your-image.jpg" 
         alt="Descriptive alt text" 
         class="img-fluid rounded shadow-sm">
    <figcaption class="text-muted text-center mt-2 small">
        Image caption goes here
    </figcaption>
</figure>
```

### 4. **Tip/Info Box (Primary Color)**
```php
<div class="p-4 bg-light rounded border-start border-5 border-primary my-4">
    <h5 class="text-primary mb-3"><i class="fa fa-lightbulb me-2"></i>Pro Tip</h5>
    <p class="mb-0">
        Your tip or important information here.
    </p>
</div>
```

### 5. **Alert Box**
```php
<div class="alert alert-warning mb-4">
    <strong><i class="fa fa-exclamation-triangle me-2"></i>Important Note:</strong> 
    Your important message here.
</div>
```

### 6. **Highlighted Card Section**
```php
<div class="card bg-light border-0 shadow-sm">
    <div class="card-body p-4">
        <h3 class="card-title text-center text-primary mb-4" style="font-family: 'Jost', sans-serif;">
            <i class="fa fa-star text-warning me-2"></i>Card Title
        </h3>
        <ul class="list-unstyled">
            <li class="mb-3 d-flex align-items-start">
                <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                <div>
                    <strong>Point 1:</strong> Description
                </div>
            </li>
        </ul>
    </div>
</div>
```

### 7. **WhatsApp CTA Card**
```php
<div class="card bg-primary text-white mb-5">
    <div class="card-body text-center p-5">
        <h3 class="text-white mb-3">Call to Action Title</h3>
        <p class="mb-4">Description text</p>
        <a href="https://wa.me/971585945007?text=Your message" target="_blank"
            class="btn btn-light btn-lg rounded-pill px-5 py-3">
            <i class="fab fa-whatsapp me-2"></i>Chat with Us on WhatsApp
        </a>
    </div>
</div>
```

### 8. **Comparison Table**
```php
<div class="table-responsive my-4">
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
        </tbody>
    </table>
</div>
```

### 9. **Feature Cards Grid**
```php
<div class="row g-4 my-4">
    <div class="col-md-6">
        <div class="card h-100 border-primary">
            <div class="card-body">
                <h4 class="card-title text-primary"><i class="fa fa-star me-2"></i>Feature Title</h4>
                <p class="card-text">Feature description</p>
            </div>
        </div>
    </div>
</div>
```

### 10. **Bulleted List**
```php
<ul class="mb-4">
    <li>First point</li>
    <li>Second point</li>
    <li>Third point</li>
</ul>
```

## Brand Color Usage Guidelines

### When to Use Each Color:

1. **Primary (#13357B - Deep Blue)**
   - Main headings (H2)
   - Primary CTA buttons
   - Border accents for important boxes
   - Category badges for "Dubai Tours"
   - Icons in primary contexts

2. **Secondary (#2596be - Teal Blue)**
   - Secondary buttons
   - Alternative badges
   - Category badges for "International" or "Adventure"
   - Contact/Help CTAs

3. **Success (#4CAF50 - Green)**
   - WhatsApp buttons
   - Success indicators
   - Checkmarks and positive feedback
   - "Jain-Friendly" or "Vegetarian" badges

4. **Danger (Red)**
   - Romantic content (honeymoon, couples)
   - Special offers or urgent CTAs
   - Warning indicators

## Image Guidelines

### Image Sizes:
- **Featured Image**: 1200x500px (landscape)
- **In-content Images**: 800x600px (landscape)
- **Related Post Thumbnails**: 600x400px (landscape)

### Image Optimization:
- Use WebP format when possible
- Compress images to < 200KB
- Always include descriptive alt text for SEO

### Image Locations:
```
/img/blogs/
  ├── BlogTopicName/
  │   ├── featured-image.webp
  │   ├── image-1.webp
  │   ├── image-2.jpg
  │   └── ...
```

## SEO Best Practices

1. **Title**: 50-60 characters, include main keyword
2. **Description**: 150-160 characters, compelling and keyword-rich
3. **Keywords**: 5-10 relevant keywords, comma-separated
4. **Headings**: Use H2 for main sections, H3 for subsections, H4 for sub-subsections
5. **Alt Text**: Descriptive, include keywords naturally
6. **Internal Links**: Link to related blog posts and service pages
7. **Read Time**: Calculate based on word count (avg 200 words/min)

## Content Structure Best Practices

1. **Introduction** (Section 1)
   - Hook the reader
   - Set expectations
   - Include a relevant image

2. **Main Content** (Sections 2-4)
   - Break into logical sections
   - Use subsections for better organization
   - Include images, tables, or cards to break up text
   - Add tip boxes or alerts for important information

3. **CTA Section** (Mid-content)
   - Place WhatsApp CTA after 2-3 sections
   - Make it visually distinct with primary color

4. **Conclusion** (Final Section)
   - Summarize key points
   - Encourage action
   - Include final CTA

## Sidebar Components (Bottom of Page)

The template includes three sidebar components that appear below the main content:

1. **Newsletter Signup** - Captures email leads
2. **Popular Categories** - Internal navigation
3. **Contact CTA** - Direct contact options

These are fixed and should remain consistent across all blog posts.

## Related Posts Section

- Always include 2 related posts
- Choose posts from the same category or related topics
- Ensure images are high quality and relevant

## Subscribe Section

The subscribe section is automatically included at the bottom of every blog post. No customization needed unless you want to change the messaging for a specific campaign.

## Testing Checklist

Before publishing a new blog post, verify:

- [ ] All SEO variables are filled correctly
- [ ] Featured image loads properly
- [ ] All internal images load properly
- [ ] Social share buttons work
- [ ] WhatsApp CTA links work
- [ ] Related posts links work
- [ ] Breadcrumbs show correct category
- [ ] Mobile responsive (test on phone)
- [ ] All brand colors are used correctly
- [ ] No broken links
- [ ] Grammar and spelling checked
- [ ] Read time is accurate

## File Naming Convention

Use lowercase with hyphens:
```
dubai-honeymoon-guide.php
jain-family-travel-tips.php
burj-khalifa-visiting-guide.php
```

## Common Mistakes to Avoid

1. ❌ Using colors outside the brand palette
2. ❌ Forgetting to update the canonical URL
3. ❌ Using low-quality or unoptimized images
4. ❌ Not including alt text for images
5. ❌ Forgetting to update related posts
6. ❌ Not testing WhatsApp links
7. ❌ Inconsistent heading hierarchy (H2 → H4 without H3)
8. ❌ Too long paragraphs (break into smaller chunks)

## Support

For questions or issues with the template, contact the development team or refer to the Dubai Honeymoon blog as a reference implementation.

---

**Last Updated**: December 22, 2025
**Template Version**: 1.0
**Based on**: dubai-honeymoon-destination-guide.php
