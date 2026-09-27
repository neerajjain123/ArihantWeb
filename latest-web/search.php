<?php
// Page SEO Variables
$pageTitle = "Search Results | Arihant Travels";
$pageDescription = "Search results for tours, packages, and activities offered by Arihant Travels.";
$pageKeywords = "search, Dubai tours, packages, activities";
$pageCanonical = "https://arihantlink.com/search";
$currentPage = "search";

include 'includes/header.php';

// Get search query
$searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

if (!empty($searchQuery)) {
    // Define pages to search through
    $pagesToSearch = [];

    // Get all PHP files in root directory
    $rootFiles = glob('*.php');
    foreach ($rootFiles as $file) {
        // Skip certain files
        if (in_array($file, ['search.php', 'login.php', 'register.php', 'logout.php', 'dashboard.php', 'privacy-policy.php', 'terms.php'])) {
            continue;
        }
        $pagesToSearch[] = $file;
    }

    // Get blog files
    $blogFiles = glob('blog/*.php');
    foreach ($blogFiles as $file) {
        // Skip template files
        if (strpos($file, 'template') !== false || strpos($file, 'create_docx') !== false) {
            continue;
        }
        $pagesToSearch[] = $file;
    }

    // Search through each page
    foreach ($pagesToSearch as $file) {
        $content = file_get_contents($file);

        // Extract page variables using regex
        preg_match('/\$pageTitle\s*=\s*["\'](.+?)["\']/s', $content, $titleMatch);
        preg_match('/\$pageDescription\s*=\s*["\'](.+?)["\']/s', $content, $descMatch);
        preg_match('/\$pageKeywords\s*=\s*["\'](.+?)["\']/s', $content, $keywordsMatch);

        $title = isset($titleMatch[1]) ? $titleMatch[1] : '';
        $description = isset($descMatch[1]) ? $descMatch[1] : '';
        $keywords = isset($keywordsMatch[1]) ? $keywordsMatch[1] : '';

        // Skip if no title found
        if (empty($title)) {
            continue;
        }

        // Search in title, description, and keywords (case-insensitive)
        $searchLower = strtolower($searchQuery);
        $titleLower = strtolower($title);
        $descLower = strtolower($description);
        $keywordsLower = strtolower($keywords);

        $titleMatch = stripos($titleLower, $searchLower) !== false;
        $descMatch = stripos($descLower, $searchLower) !== false;
        $keywordsMatch = stripos($keywordsLower, $searchLower) !== false;

        if ($titleMatch || $descMatch || $keywordsMatch) {
            // Calculate relevance score (title matches are more relevant)
            $relevance = 0;
            if ($titleMatch)
                $relevance += 3;
            if ($descMatch)
                $relevance += 2;
            if ($keywordsMatch)
                $relevance += 1;

            // Create URL from filename
            $url = str_replace('.php', '', $file);

            // Highlight search term in description
            $highlightedDesc = preg_replace('/(' . preg_quote($searchQuery, '/') . ')/i', '<mark>$1</mark>', $description);

            $results[] = [
                'title' => $title,
                'description' => $highlightedDesc,
                'url' => '/' . $url,
                'relevance' => $relevance
            ];
        }
    }

    // Sort by relevance
    usort($results, function ($a, $b) {
        return $b['relevance'] - $a['relevance'];
    });
}
?>

<!-- Breadcrumb Start -->
<div class="container-fluid bg-breadcrumb" style="background-image: url('img/carousel-2.jpg');">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Search Results</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-white">Search</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Search Results Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Search Results</h5>
            <?php if (!empty($searchQuery)): ?>
                <h1 class="mb-4">Results for "
                    <?php echo htmlspecialchars($searchQuery); ?>"
                </h1>
                <p class="mb-0">Found
                    <?php echo count($results); ?> result
                    <?php echo count($results) != 1 ? 's' : ''; ?>
                </p>
            <?php else: ?>
                <h1 class="mb-4">Search Our Services</h1>
                <p class="mb-0">Enter a keyword to search for tours, packages, and activities</p>
            <?php endif; ?>
        </div>

        <!-- Search Form -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <form action="/search" method="GET" class="position-relative">
                    <input class="form-control border border-primary rounded-pill w-100 py-3 ps-4 pe-5 shadow-sm"
                        type="text" name="q" placeholder="Search for desert safari, yacht rental, city tours..."
                        value="<?php echo htmlspecialchars($searchQuery); ?>" required>
                    <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
                        style="top: 50%; right: 10px; transform: translateY(-50%);">
                        <i class="fa fa-search me-2"></i>Search
                    </button>
                </form>
            </div>
        </div>

        <!-- Results -->
        <?php if (!empty($searchQuery)): ?>
            <?php if (count($results) > 0): ?>
                <div class="row g-4">
                    <?php foreach ($results as $result): ?>
                        <div class="col-lg-6">
                            <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden shadow-sm">
                                <div class="p-4">
                                    <h4 class="mb-3">
                                        <a href="<?php echo $result['url']; ?>" class="text-dark">
                                            <?php echo htmlspecialchars($result['title']); ?>
                                        </a>
                                    </h4>
                                    <p class="mb-4">
                                        <?php echo $result['description']; ?>
                                    </p>
                                    <a href="<?php echo $result['url']; ?>" class="btn btn-primary rounded-pill px-4">
                                        View Details <i class="fa fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-light rounded p-5 text-center">
                            <i class="fa fa-search fa-3x text-primary mb-4"></i>
                            <h3 class="mb-3">No Results Found</h3>
                            <p class="mb-4">We couldn't find any pages matching "
                                <?php echo htmlspecialchars($searchQuery); ?>". Try searching with different keywords.
                            </p>
                            <div class="mb-4">
                                <h5 class="mb-3">Popular Searches:</h5>
                                <div class="d-flex flex-wrap gap-2 justify-content-center">
                                    <a href="/search?q=desert+safari" class="btn btn-outline-primary rounded-pill">Desert
                                        Safari</a>
                                    <a href="/search?q=yacht+rental" class="btn btn-outline-primary rounded-pill">Yacht
                                        Rental</a>
                                    <a href="/search?q=city+tour" class="btn btn-outline-primary rounded-pill">City Tour</a>
                                    <a href="/search?q=theme+park" class="btn btn-outline-primary rounded-pill">Theme Parks</a>
                                    <a href="/search?q=georgia" class="btn btn-outline-primary rounded-pill">Georgia Tours</a>
                                    <a href="/search?q=baku" class="btn btn-outline-primary rounded-pill">Baku Tours</a>
                                    <a href="/search?q=jain+meals" class="btn btn-outline-primary rounded-pill">Jain Meals</a>
                                </div>
                            </div>
                            <a href="/" class="btn btn-primary rounded-pill px-5">Back to Home</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light rounded p-5 text-center">
                        <i class="fa fa-info-circle fa-3x text-primary mb-4"></i>
                        <h3 class="mb-3">Start Your Search</h3>
                        <p class="mb-4">Enter keywords above to find tours, packages, and activities that match your
                            interests.</p>
                        <div class="mb-4">
                            <h5 class="mb-3">Try Searching For:</h5>
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <a href="/search?q=desert+safari" class="btn btn-outline-primary rounded-pill">Desert
                                    Safari</a>
                                <a href="/search?q=yacht+rental" class="btn btn-outline-primary rounded-pill">Yacht
                                    Rental</a>
                                <a href="/search?q=city+tour" class="btn btn-outline-primary rounded-pill">City Tour</a>
                                <a href="/search?q=theme+park" class="btn btn-outline-primary rounded-pill">Theme Parks</a>
                                <a href="/search?q=hot+air+balloon" class="btn btn-outline-primary rounded-pill">Hot Air
                                    Balloon</a>
                                <a href="/search?q=dhow+cruise" class="btn btn-outline-primary rounded-pill">Dhow Cruise</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Search Results End -->

<style>
    mark {
        background-color: #ffd700;
        padding: 2px 4px;
        border-radius: 3px;
        font-weight: 600;
    }

    .service-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
    }
</style>

<?php include 'includes/footer.php'; ?>