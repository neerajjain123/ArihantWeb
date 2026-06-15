<?php
// Decommissioned diagnostic endpoint. Removed during security review (2026-05).
http_response_code(410);
header('Content-Type: text/plain; charset=utf-8');
echo "Gone.\n";
exit;
