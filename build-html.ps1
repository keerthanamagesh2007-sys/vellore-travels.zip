$phpFiles = Get-ChildItem -Filter *.php

# Load include files
$header = Get-Content "includes/header.php" -Raw
$menu = Get-Content "includes/menu.php" -Raw
$banner = Get-Content "includes/banner.php" -Raw
$left = Get-Content "includes/left.php" -Raw
$right = Get-Content "includes/right.php" -Raw
$footer = Get-Content "includes/footer.php" -Raw
$meta = Get-Content "includes/meta.txt" -Raw
$css = Get-Content "includes/css.txt" -Raw

foreach ($file in $phpFiles) {
    # Skip mail processing PHP files which are server-side only
    if ($file.Name -match "mail|error_log|google_analytics") {
        continue
    }

    $content = Get-Content $file.FullName -Raw
    
    # Replace includes (handling spaces, single/double quotes)
    $content = $content -replace '<\?php\s+include\s*[''"]includes/header\.php[''"]\s*;\s*\?>', $header
    $content = $content -replace '<\?php\s+include\s*[''"]includes/menu\.php[''"]\s*;\s*\?>', $menu
    $content = $content -replace '<\?php\s+include\s*[''"]includes/banner\.php[''"]\s*;\s*\?>', $banner
    $content = $content -replace '<\?php\s+include\s*[''"]includes/left\.php[''"]\s*;\s*\?>', $left
    $content = $content -replace '<\?php\s+include\s*[''"]includes/right\.php[''"]\s*;\s*\?>', $right
    $content = $content -replace '<\?php\s+include\s*[''"]includes/footer\.php[''"]\s*;\s*\?>', $footer
    $content = $content -replace '<\?php\s+include\s*[''"]includes/meta\.txt[''"]\s*;\s*\?>', $meta
    $content = $content -replace '<\?php\s+include\s*[''"]includes/css\.txt[''"]\s*;\s*\?>', $css
    
    # Convert .php references in links to .html for local browsing
    $content = $content -replace 'href="([^"]+)\.php"', 'href="$1.html"'
    $content = $content -replace "href='([^']+)\.php'", "href='$1.html'"
    
    # Fix action forms for local demonstration
    $content = $content -replace 'action="mail\.php"', 'action="#" onSubmit="alert(''Form submitted successfully! (Local simulation)''); return false;"'
    
    $outName = Join-Path $file.DirectoryName ($file.BaseName + ".html")
    Set-Content -Path $outName -Value $content
}

Write-Output "Successfully compiled PHP pages to static HTML files!"
