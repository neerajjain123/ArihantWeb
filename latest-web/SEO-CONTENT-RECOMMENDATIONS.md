# Content recommendations to push page-2 queries into top 10

**Source:** Google Search Console export, last 3 months
**Filter applied:** Impressions ≥ 100 AND average position 11–20
**Result:** 4 queries match, totalling **447 impressions** and **0 clicks** — every one is on page 2 of Google.

## The 4 target queries

| Query | Impressions | Position |
|---|---:|---:|
| dubai tour packages with jain food | 124 | 11.06 |
| package tour for dubai with jain food | 110 | 12.97 |
| ferrari world packages | 108 | 15.75 |
| jain tour in dubai | 105 | 14.81 |

Three of the four cluster around the same intent — **Dubai package + Jain food** — and they're all closer to page 1 than they look. Position 11.06 means a single competitor's small SEO advantage is keeping you off page 1; a focused asset usually moves these into positions 6–9 within 6–10 weeks of crawl re-indexing.

I also surfaced two **adjacent opportunities** worth including in the same content sprint:

| Adjacent query | Impressions | Position | Why include it |
|---|---:|---:|---|
| dubai tour with veg food | 106 | 22.58 | Same intent as the cluster — a single page can capture all four |
| tbilisi package from dubai | 69 | 14.38 | Just below the impression cut-off but high commercial intent for an existing service |

---

## The 5 recommended content pieces

### 1. New commercial landing page — "Dubai Tour Packages with Jain Food"

**Target URL:** `/dubai-tour-packages-jain-food` (clean keyword-rich slug; redirect older URLs to it if they exist)

**Primary queries captured:**
- *dubai tour packages with jain food* (124 imp, pos 11.06)
- *package tour for dubai with jain food* (110 imp, pos 12.97)
- *dubai tour with veg food* (106 imp, pos 22.58) — adjacent pickup

**Why this page, not a blog:** the search intent is commercial-transactional, not informational. A dedicated landing page beats a blog post for these queries because Google ranks pages that match query intent. Your current `/dubai-tour-from-india` page is close in topic but isn't optimised for the exact phrase "Dubai tour packages with Jain food."

**Mandatory structure (in this order):**

- H1: "Dubai Tour Packages with Jain Food — 100% Pure-Veg Itineraries from AED 2,599"
- Hero with a clear differentiator (your existing "no onion, no garlic, no root vegetables" line).
- A 3-column package comparison table (Budget 3N/4D, Family 5N/6D, Luxury 7N/8D). Each cell must show the explicit Jain food guarantee, not just a tickbox.
- A sample day-by-day itinerary for the most popular tier — visible day labels, meal labels ("Breakfast: Jain poha at hotel; Lunch: Pre-arranged Jain thali at Bur Dubai…"). Concrete meal names rank.
- A "Why Jain families choose us" trust block — kitchen partnership photos, certification list, founder quote.
- Pricing schedule with start dates over the next 90 days (freshness signal Google likes).
- FAQ block (5–8 Qs) with `FAQPage` JSON-LD schema.
- Two CTAs: WhatsApp and inline enquiry form.

**Schema:** `TouristTrip` markup (you already use this) plus `FAQPage`.

**Internal links to add:** from your homepage `/`, `/dubai-holiday-packages`, `/dubai-tour-from-india`, `/desert-safari`, and the new FAQ page (#2 below). Anchor text variations: "Jain food Dubai packages", "Dubai tour with Jain meals", "pure veg Dubai package".

---

### 2. New FAQ resource page — "Jain Tour in Dubai: 30 questions every Jain family asks"

**Target URL:** `/blog/jain-tour-dubai-complete-guide`

**Primary query captured:**
- *jain tour in dubai* (105 imp, pos 14.81)

**Why this format:** the query "jain tour in dubai" is exploratory — searchers don't know what to expect. A deeply structured FAQ page wins two ways: it ranks for the head term, and it earns FAQ rich snippets that take up visual space in SERPs (lifting CTR even if position doesn't change). It also feeds topical authority to landing page #1.

**Structure — group questions into 6 sections:**

1. Food on tour (8–10 Qs) — "Will my breakfast be Jain?", "Can I bring tiffin?", "Are there 100% Jain restaurants in Dubai?", "What happens on desert safari dinner?", "Can hotels prepare Jain meals on request?"
2. Temples & darshan (4–5 Qs) — Bur Dubai Jain mandir hours, BAPS Abu Dhabi visit logistics, transport from hotel.
3. Activities & itinerary (5 Qs) — Which Dubai activities are appropriate, which aren't, dress code considerations.
4. Hotels (4 Qs) — Which Dubai hotels handle Jain requests, kitchen guarantees, breakfast inclusions.
5. Visa & documents (3 Qs) — 30-day/60-day options, how Arihant assists.
6. Costs & booking (4 Qs) — typical 3N/5N/7N price ranges, what's included/excluded, deposit policy.

**Each answer:** 2–4 sentences. Long enough to satisfy intent, short enough to be a featured snippet candidate.

**Schema:** `FAQPage` JSON-LD for every Q.

**Internal links:** to landing #1, `/uae-visa`, `/desert-safari`, `/dubai-full-day-city-tour`, `/dhow-cruise`.

---

### 3. New page — "Ferrari World Abu Dhabi Packages 2026: Tickets, 2/3/4-Park Combos & Transfers from Dubai"

**Target URL:** `/ferrari-world-packages` (or `/ferrari-world-abu-dhabi-packages` for closer phrase match)

**Primary query captured:**
- *ferrari world packages* (108 imp, pos 15.75)

**Bonus query also helped** (already top 10 but 0 CTR — needs a richer landing):
- *ferrari world abu dhabi ticket price 2026* (441 imp, pos 8.80, 0% CTR — title/meta isn't compelling enough; this page can replace whatever currently ranks)

**Why this page is high-leverage:** you currently have `/ferrari-world` and `/theme-parks` but no specifically packaged "Ferrari World packages" page. The 441-impression price-2026 query is gold — it's already in the top 10 but not getting clicked, meaning the SERP listing's title/meta aren't compelling. A dedicated /ferrari-world-packages page lets you craft a brand-new title that includes "2026 prices" and "packages."

**Structure:**

- H1: "Ferrari World Abu Dhabi Packages 2026 — Tickets, Combos & Transfers from Dubai"
- Live price matrix table: 1-Park, 2-Park, 3-Park, 4-Park combos with prices, validity, and what's included.
- Side-by-side comparison: Ferrari World alone vs Yas Island Multi-Park bundles.
- Transfer options from Dubai (private car, coach, what's included in each package).
- Jain food on the day — what's available at the park, what to pre-arrange.
- "Best time to visit Ferrari World" mini-guide (queue times, weather).
- FAQ section (6 Qs) with schema.

**Title tag must include:** "Ferrari World Packages" AND "2026 Prices" AND "Abu Dhabi" — that's how you capture both queries.

**Internal links:** from `/theme-parks`, `/ferrari-world` (if it exists), `/dubai-excursions`, `/yas-waterworld`, and the homepage carousel attractions section.

---

### 4. New blog — "Tbilisi Package from Dubai: 5-night Georgia itinerary for Jain & vegetarian families"

**Target URL:** `/blog/tbilisi-package-from-dubai`

**Primary query captured:**
- *tbilisi package from dubai* (69 imp, pos 14.38) — just below the strict cut-off but identical search intent and you already sell this package

**Why this one is "free money":** you already have `/georgia` (a transactional page). This blog feeds it. The pos-14 ranking means Google sees relevance but no specific page; a focused asset moves you to page 1 quickly for a low-volume but high-conversion query.

**Structure:**

- H1: "Tbilisi Package from Dubai: 5-Night Georgia Trip for Jain Families"
- Day-by-day itinerary with vegetarian/Jain restaurant names called out by name (specificity wins; "Kakhetian Restaurant" beats "a local restaurant").
- Cost breakdown table: tickets, hotel, transfers, meals, totals — in both AED and INR (your audience includes India).
- Visa-for-Indian-passport sub-section.
- Weather-by-month table.
- 5 photos with descriptive alt text.
- Single CTA: link to `/georgia` for booking.

**Internal links:** from `/georgia`, `/about`, blog index.

---

### 5. Trust/Authority blog — "How we guarantee 100% Jain food on every Dubai tour (the behind-the-scenes look)"

**Target URL:** `/blog/jain-food-guarantee-dubai-tours`

**Primary queries captured:** none directly from the 11–20 zone, but this is the **CTR-rescue piece** for queries already in the top 10 that are getting zero clicks:

- *jain food in dubai* (276 impressions, pos 9.21, 0 CTR)

**Why this matters for your target zone:** Google's E-E-A-T algorithm rewards demonstrated expertise. A behind-the-scenes operational piece — kitchen agreement photos, chef interviews, founder Shweta Jain's personal sourcing process — signals authority that lifts every page in the same cluster, including landing #1 and FAQ #2.

**Structure:**

- H1: "How Arihant Travel Guarantees 100% Jain Food in Dubai (a 3-step kitchen-verification process)"
- Step 1: Vendor onboarding (with photos of the agreement form, blurred for confidentiality).
- Step 2: Pre-trip menu locking (screenshots of email confirmations).
- Step 3: On-tour verification (photo of a Jain meal certificate).
- Founder quote: 60–80 words from Shweta Jain about why this matters personally.
- List of 8–10 specific verified kitchens by name.
- 6 photos of actual meals served on past tours (with consent).

**Internal links:** from homepage, landing #1, FAQ #2, `/about`, `/desert-safari`, every package page.

---

## Implementation order (do them in this sequence)

1. **Week 1:** Landing page #1 (highest impressions, fastest commercial impact).
2. **Week 2:** FAQ page #2 (feeds authority to #1 via internal links).
3. **Week 3:** Ferrari World page #3 (separate cluster, but the 441-impression bonus query makes this very high-ROI).
4. **Week 4:** Trust blog #5 (lifts E-E-A-T across all the above).
5. **Week 5:** Tbilisi blog #4 (smallest but highest-converting once it ranks).

After publishing each piece, submit the URL to Google Search Console → URL Inspection → Request Indexing. Most pages re-index in 3–7 days; ranking shifts usually appear at 4–10 weeks.

---

## Two CTR rescues to do alongside (not new content, just title/meta rewrites)

These don't need new pages — they need new `<title>` and `<meta description>` on existing pages, because they're already in the top 10 but bleeding 100% of impressions to zero clicks. Worth ~2 hours of work:

| Page (currently ranking) | Query | Imp | Pos | Suggested new title |
|---|---|---:|---:|---|
| `/dubai-gold-souk-guide` or wherever | dubai gold souk deals | 222 | 8.42 | "Dubai Gold Souk Deals 2026: Local Prices, Bargaining Tips & Where to Buy" |
| `/warner-bros-world` | warner bros world abu dhabi ticket price 2026 | 235 | 8.30 | "Warner Bros World Abu Dhabi 2026 Ticket Prices (Cheaper Options Inside)" |

Year-specific titles outperform evergreen ones on price-intent queries — that's why "2026" wins.

---

## Tracking the result

Set up a Search Console regular-expression filter on the 4 strict-target query strings, plus the 2 adjacent ones. Re-check after 6 and 10 weeks. Success looks like:

- Cluster 1 (jain food packages) average position dropping from ~13 to ~7–8.
- Cluster 1 clicks moving from 0 to 8–15 per week.
- Ferrari World packages position from 15.75 to ~8.
- The 441-impression ticket-price query going from 0% to 4–6% CTR (the page-3 industry average for that position).
