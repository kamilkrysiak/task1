<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/tiny-slider.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div id="app">
        <div class="container">
       <div class="gallery">
            <h3>Best sellers</h3>
             <ul class="control" id="custom-control">
                <li class="prev">
                    <img src="../images/prev.svg" />                        
                </li>
                <li class="next">
                    <img src="../images/next.svg" /> 
                </li>
            </ul>
            <div class="my-slider">
                {foreach $products as $product}
                <div class="card">
                    <div class="card-image">
                        <img src="{$product.img_url}" />
                    </div>
                    <p class="card-name">{$product.name}</p>
                    <div class="card-prices">
                        {if $product.specific_price} 
                        <span class="card-price-reduced">{displayPrice price="{$product.price}"}</span>
                        <span class="card-price-old">{displayPrice price="{$product.specific_price.priceWithoutReduction}"}</span>
                        {else} 
                        <span class="card-price">{displayPrice price="{$product.price}"}</span>
                        {/if}
                    </div>
                </div>
                {/foreach}     
            </div>
       </div>
    </div>
    </div> 

    <script src="/js/jquery-3.6.0.slim.min.js"></script>
    <script src="/js/tiny-slider.js"></script>
    <script src="/js/theme.js"></script>
    <script>
    var slider = tns({
        container: ".my-slider",
        items: 4,
        gutter: 20,
        slideBy: 1,
        controlsPosition: "bottom",
        navPosition: "bottom",
        mouseDrag: true,
        autoplay: true,
        autoplayButtonOutput: false,
        controlsContainer: "#custom-control",
        });
    </script>
</body>

</html>