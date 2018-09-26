<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    @foreach($pages as $page)
        <url>
            <loc>{{$host}}{{$page->url}}</loc>
            <lastmod>{{$page->updated_at}}</lastmod>
            <priority>1.00</priority>
        </url>
    @endforeach
    @foreach($products as $product)
        <url>
            <loc>{{$host}}{{$product->url}}</loc>
            <lastmod>{{$product->updated_at}}</lastmod>
            <priority>1.00</priority>
        </url>
    @endforeach

</urlset>