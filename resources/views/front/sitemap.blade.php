<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://en.gj528.com</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/products</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/products/molecular-sieve</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/products/desiccant</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/products/activated-molecular-sieve-powder</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/products/special-molecular-sieve</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/products/activated-alumina</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/applications</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/applications/air-drying</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/applications/air-separation</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/applications/air-purification</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/applications/petrochemical-industry</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/applications/other-applications</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/news</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/newss/industry-news</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/newss/company-news</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/about</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>http://en.gj528.com/contact</loc>
        <lastmod><?php echo date("Y-m-d") ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    @foreach ($products as $product)
<url>
        <loc>http://en.gj528.com/product/{{$product->slug}}</loc>
        <lastmod>{{ $product->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
    @foreach ($anlis as $anli)
<url>
        <loc>http://en.gj528.com/application/{{ $anli->slug }}</loc>
        <lastmod>{{ $anli->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
    @foreach ($news as $new)
<url>
        <loc>http://en.gj528.com/news/{{ $new->slug }}</loc>
        <lastmod>{{ $new->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>
