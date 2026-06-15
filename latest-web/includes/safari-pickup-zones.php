<?php
/**
 * Safari pickup-zones table.
 *
 * Reusable partial used by all desert-safari sub-pages so visitors can see
 * pickup time + supplement for their hotel area in one place.
 *
 * Usage:
 *   <?php include __DIR__ . '/includes/safari-pickup-zones.php'; ?>
 *
 * Optional context vars set by the parent before include():
 *   $safariType         e.g. "Standard Evening Safari" — interpolated into copy
 *   $pickupTimeBase     e.g. "3:00 – 3:30 PM" — first time slot for the table
 */

$safariType = isset($safariType) ? $safariType : 'desert safari';
$pickupTimeBase = isset($pickupTimeBase) ? $pickupTimeBase : '3:00 – 3:30 PM';
?>
<section class="page-section page-section--light" id="pickup-zones">
    <div class="container" style="max-width: 920px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Hotel pickup</span>
            <h2 class="section-heading__title">Pickup time and supplement by area</h2>
            <p class="section-heading__lead">Free hotel pickup is included from most Dubai zones.
                If your hotel is outside the standard radius, the supplement below applies.</p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered bg-white shadow-sm">
                <thead style="background: var(--primary); color:#fff;">
                    <tr>
                        <th>Area</th>
                        <th>Hotels we usually pick up from</th>
                        <th>Pickup window</th>
                        <th>Supplement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Downtown Dubai / DIFC / Business Bay</strong></td>
                        <td>Address Downtown, Palace Downtown, Sofitel, Manzil, JW Marriott Marquis, Taj Dubai, Renaissance</td>
                        <td><?php echo htmlspecialchars($pickupTimeBase); ?></td>
                        <td><span class="badge bg-success">Free</span></td>
                    </tr>
                    <tr>
                        <td><strong>JBR / Marina / Media City / Internet City</strong></td>
                        <td>Hilton JBR, Address Marina, Le Royal Meridien, Habtoor Grand, JA Ocean View, Movenpick</td>
                        <td><?php echo htmlspecialchars($pickupTimeBase); ?></td>
                        <td><span class="badge bg-success">Free</span></td>
                    </tr>
                    <tr>
                        <td><strong>Bur Dubai / Deira / Al Karama / Al Mankhool</strong></td>
                        <td>Arabian Courtyard, Astoria, Citymax, Al Khoory, Marco Polo, Carlton Palace</td>
                        <td>15&ndash;20 min earlier</td>
                        <td><span class="badge bg-success">Free</span></td>
                    </tr>
                    <tr>
                        <td><strong>Palm Jumeirah / Al Sufouh</strong></td>
                        <td>Atlantis The Palm, Waldorf Astoria, Anantara, FIVE Palm, Rixos The Palm</td>
                        <td>15&ndash;20 min earlier</td>
                        <td>+ AED 50 / car</td>
                    </tr>
                    <tr>
                        <td><strong>Sharjah / Al Nahda Sharjah</strong></td>
                        <td>Centro, Holiday International, Coral Beach, Sharjah Premiere, City Tower, Radisson Blu</td>
                        <td>30&ndash;40 min earlier</td>
                        <td>+ AED 50 / car</td>
                    </tr>
                    <tr>
                        <td><strong>Ajman / Umm Al Quwain</strong></td>
                        <td>Ajman Saray, Kempinski Ajman, Fairmont Ajman, Bahi Ajman, Wyndham Garden Ajman</td>
                        <td>45&ndash;60 min earlier</td>
                        <td>+ AED 100 / car</td>
                    </tr>
                    <tr>
                        <td><strong>Abu Dhabi (city)</strong></td>
                        <td>Most central Abu Dhabi hotels &mdash; ask us, transfer is on request</td>
                        <td>On request</td>
                        <td>From AED 250 / car</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="small text-muted text-center mt-2">Supplements are per car (up to 6 guests), not per person. Tell us your hotel name on WhatsApp and we&rsquo;ll confirm exact pickup time and any supplement before you pay.</p>
    </div>
</section>
