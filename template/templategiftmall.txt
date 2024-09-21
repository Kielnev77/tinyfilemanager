<?php
if($jos['article_id'] != NULL)
{
  $title = str_replace('brand123',ucfirst($titlebrand),$jos['landingarticle']['title']);
  $meta_description = str_replace('brand123',ucfirst($titlebrand),$jos['landingarticle']['meta_description']);
  $long_description = str_replace('brand123',ucfirst($titlebrand),$jos['landingarticle']['long_description']);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>

    <title><?php echo strtoupper($title); ?></title>
    <meta name="title" content="<?php echo strtoupper($title); ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="id">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=2" />
    <meta name="keywords"
        content="<?php echo $keyword; ?>">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#FBFCF6"/>
    <meta property="og:title" content="<?php echo strtoupper($title); ?>">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="<?php echo $canonical_url; ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo $banner; ?>">
    <meta property="og:image:width" content="500"/>
    <meta property="og:image:height" content="500"/>
    <meta property="product:price:amount" content="8888.00"/>
    <meta property="product:price:currency" content="IDR"/>
    <meta property="product:availability" content="instock"/>
    <meta itemprop="url" content="<?php echo $canonical_url; ?>"/>
    <meta itemprop="description" content="<?php echo $meta_description; ?>"/>
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:locale" content="id-ID">

    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content="<?php echo $canonical_url; ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="<?php echo $meta_description; ?>"/>
    <meta name="description" content="<?php echo $meta_description; ?>" />

    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
    <link rel="amphtml" href="<?php echo $amp_url; ?>" />

    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta content="indonesian" name="language">
    <meta name="supported-amp-formats" content="websites,stories,ads,email">
    <meta name="language" content="ID">
    <meta name="rating" content="general">
    <meta name="copyright" content="<?php echo strtoupper($titlebrand); ?>">
    <meta name="author" content="<?php echo strtoupper($titlebrand); ?>">
    <meta name="distribution" content="global">
    <meta name="publisher" content="<?php echo strtoupper($titlebrand); ?>">
    <meta name="geo.placename" content="DKI Jakarta">
    <meta name="geo.country" content="ID">
    <meta name="geo.region" content="ID" />
    <meta name="tgn.nation" content="Indonesia">
    <link href='<?php echo $favicon; ?>p' rel='icon' sizes='32x32' type='image/png' />

    <!-- start preload -->
    <link rel="preload" href="<?php echo $logo; ?>" as="image" />
    <link rel="preload" href="<?php echo $banner; ?>" as="image"/>
    <link rel="stylesheet" href="https://raw.githubusercontent.com/ovaramicy99/PhpSpreadsheet/master/gift.css">
    <meta name="page google.com" content="https://www.google.com/search?q=<?php echo strtoupper($titlebrand); ?>">
    <meta name="page google.co.id" content="https://www.google.co.id/search?q=<?php echo strtoupper($titlebrand); ?>">

    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": "WebSite",
                    "@id": "<?php echo $canonical_url; ?>/",
                    "url": "<?php echo $canonical_url; ?>/",
                    "name": "<?php echo strtoupper($title); ?>",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "<?php echo $canonical_url; ?>/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    },
                    "inLanguage": "id-ID"
                },
                {
                    "@type": "CollectionPage",
                    "@id": "<?php echo $canonical_url; ?>/#webpage",
                    "url": "<?php echo $canonical_url; ?>/",
                    "name": "<?php echo strtoupper($title); ?>",
                    "isPartOf": {
                        "@id": "<?php echo $canonical_url; ?>/"
                    },
                    "description": "<?php echo $meta_description; ?>",
                    "breadcrumb": {
                        "@id": "<?php echo $canonical_url; ?>/#breadcrumb"
                    },
                    "inLanguage": "id-ID",
                    "potentialAction": {
                        "@type": "ReadAction",
                        "target": "<?php echo $canonical_url; ?>/"
                    }
                },
                {
                    "@type": "Product",
                    "name": "<?php echo strtoupper($title); ?>",
                    "image": "<?php echo $banner; ?>",
                    "description": "<?php echo $meta_description; ?>",
                    "sku": "1139471",
                    "brand": {
                        "@type": "Brand",
                        "name": "<?php echo strtoupper($titlebrand); ?>"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "IDR",
                        "price": "8888.00",
                        "priceValidUntil": "2030-09-18",
                        "itemCondition": "https://schema.org/NewCondition",
                        "availability": "https://schema.org/InStock",
                        "seller": {
                            "@type": "Organization",
                            "name": "<?php echo strtoupper($titlebrand); ?>",
                            "url": "<?php echo $canonical_url; ?>/"
                        },
                        "hasMerchantReturnPolicy": {
                            "@type": "MerchantReturnPolicy",
                            "name": "Kebijakan Pengembalian",
                            "url": "<?php echo $canonical_url; ?>//return-policy",
                            "applicableCountry": "ID",
                            "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
                            "merchantReturnDays": "30",
                            "returnFees": "https://schema.org/FreeReturn",
                            "returnMethod": "https://schema.org/ReturnInStore"
                        },
                        "shippingDetails": {
                            "@type": "OfferShippingDetails",
                            "shippingDestination": {
                                "@type": "DefinedRegion",
                                "addressCountry": "ID"
                            },
                            "shippingRate": {
                                "@type": "MonetaryAmount",
                                "value": "5000",
                                "currency": "IDR"
                            },
                            "deliveryTime": {
                                "@type": "ShippingDeliveryTime",
                                "handlingTime": {
                                    "@type": "QuantitativeValue",
                                    "minValue": 1,
                                    "maxValue": 2,
                                    "unitCode": "d"
                                },
                                "transitTime": {
                                    "@type": "QuantitativeValue",
                                    "minValue": 2,
                                    "maxValue": 5,
                                    "unitCode": "d"
                                }
                            }
                        }
                    },
                    "review": {
                        "@type": "Review",
                        "reviewCount": "9978612",
                        "reviewBody": "Ulasan pelanggan menunjukkan bahwa <?php echo strtoupper($titlebrand); ?> menawarkan pengalaman permainan slot yang dapat diandalkan dan menguntungkan.",
                        "author": {
                            "@type": "Person",
                            "name": "Pelanggan"
                        }
                    },
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "5.0",
                        "reviewCount": "999"
                    }
                },
                {
                    "@type": "ItemList",
                    "name": "Permainan Populer",
                    "itemListElement": [{
                            "@type": "Product",
                            "name": "Pragmatic Play",
                            "description": "Pragmatic Play adalah Provider Game Slot Terpopuler saat ini",
                            "image": "https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-7.webp?v=20240813",
                            "url": "<?php echo $canonical_url; ?>/",
                            "offers": {
                                "@type": "Offer",
                                "priceCurrency": "IDR",
                                "price": "10000",
                                "availability": "https://schema.org/InStock",
                                "url": "<?php echo $canonical_url; ?>/",
                                "priceValidUntil": "2030-11-20",
                                "validFrom": "2024-09-14",
                                "hasMerchantReturnPolicy": {
                                    "@type": "MerchantReturnPolicy",
                                    "name": "Kebijakan Pengembalian",
                                    "url": "<?php echo $canonical_url; ?>//return-policy",
                                    "applicableCountry": "ID",
                                    "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
                                    "merchantReturnDays": "30",
                                    "returnFees": "https://schema.org/FreeReturn",
                                    "returnMethod": "https://schema.org/ReturnInStore"
                                },
                                "shippingDetails": {
                                    "@type": "OfferShippingDetails",
                                    "shippingDestination": {
                                        "@type": "DefinedRegion",
                                        "addressCountry": "ID"
                                    },
                                    "shippingRate": {
                                        "@type": "MonetaryAmount",
                                        "value": "5000",
                                        "currency": "IDR"
                                    },
                                    "deliveryTime": {
                                        "@type": "ShippingDeliveryTime",
                                        "handlingTime": {
                                            "@type": "QuantitativeValue",
                                            "minValue": 1,
                                            "maxValue": 2,
                                            "unitCode": "d"
                                        },
                                        "transitTime": {
                                            "@type": "QuantitativeValue",
                                            "minValue": 2,
                                            "maxValue": 5,
                                            "unitCode": "d"
                                        }
                                    }
                                }
                            },
                            "review": {
                                "@type": "Review",
                                "reviewRating": {
                                    "@type": "Rating",
                                    "ratingValue": "4.5",
                                    "bestRating": "5"
                                },
                                "author": {
                                    "@type": "Person",
                                    "name": "jasa299"
                                },
                                "reviewBody": "Permainan yang menyenangkan dengan banyak fitur menarik."
                            },
                            "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "4.5",
                                "reviewCount": "500"
                            }
                        },
                        {
                            "@type": "Product",
                            "name": "NEX 4D",
                            "description": "NEX 4D adalah Provider Game Slot terbaik saat ini",
                            "image": "https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-6/game-code-48.webp?v=20240813",
                            "url": "<?php echo $canonical_url; ?>/",
                            "offers": {
                                "@type": "Offer",
                                "priceCurrency": "IDR",
                                "price": "15000",
                                "availability": "https://schema.org/InStock",
                                "url": "<?php echo $canonical_url; ?>/",
                                "priceValidUntil": "2030-11-20",
                                "validFrom": "2024-09-14",
                                "hasMerchantReturnPolicy": {
                                    "@type": "MerchantReturnPolicy",
                                    "name": "Kebijakan Pengembalian",
                                    "url": "<?php echo $canonical_url; ?>//return-policy",
                                    "applicableCountry": "ID",
                                    "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
                                    "merchantReturnDays": "30",
                                    "returnFees": "https://schema.org/FreeReturn",
                                    "returnMethod": "https://schema.org/ReturnInStore"
                                },
                                "shippingDetails": {
                                    "@type": "OfferShippingDetails",
                                    "shippingDestination": {
                                        "@type": "DefinedRegion",
                                        "addressCountry": "ID"
                                    },
                                    "shippingRate": {
                                        "@type": "MonetaryAmount",
                                        "value": "5000",
                                        "currency": "IDR"
                                    },
                                    "deliveryTime": {
                                        "@type": "ShippingDeliveryTime",
                                        "handlingTime": {
                                            "@type": "QuantitativeValue",
                                            "minValue": 1,
                                            "maxValue": 2,
                                            "unitCode": "d"
                                        },
                                        "transitTime": {
                                            "@type": "QuantitativeValue",
                                            "minValue": 2,
                                            "maxValue": 5,
                                            "unitCode": "d"
                                        }
                                    }
                                }
                            },
                            "review": {
                                "@type": "Review",
                                "reviewRating": {
                                    "@type": "Rating",
                                    "ratingValue": "4.8",
                                    "bestRating": "5"
                                },
                                "author": {
                                    "@type": "Person",
                                    "name": "User456"
                                },
                                "reviewBody": "Grafik yang luar biasa dan peluang kemenangan besar."
                            },
                            "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "4.8",
                                "reviewCount": "150"
                            }
                        }
                    ]
                }
            ]
        }, {
            "@type": "Product",
            "name": "Hacksaw Gaming",
            "image": "https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-98.webp?v=20240813",
            "url": "<?php echo $canonical_url; ?>/",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "IDR",
                "price": "12000",
                "availability": "https://schema.org/InStock",
                "url": "<?php echo $canonical_url; ?>/",
                "validFrom": "2024-09-14"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.2",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "User789"
                },
                "reviewBody": "Game ini sangat inovatif, meskipun agak sulit dimenangkan."
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.2",
                "reviewCount": "180"
            }
        }, {
            "@type": "Product",
            "name": "Habanero",
            "image": "https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-16.webp?v=20240813",
            "url": "<?php echo $canonical_url; ?>/",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "IDR",
                "price": "8000",
                "availability": "https://schema.org/InStock",
                "url": "<?php echo $canonical_url; ?>/",
                "validFrom": "2024-09-14"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.0",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "User101"
                },
                "reviewBody": "Seru dan menantang, sangat direkomendasikan untuk pecinta slot."
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.0",
                "reviewCount": "140"
            }
        }, {
            "@type": "Product",
            "name": "Microgaming",
            "image": "https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-17.webp?v=20240813",
            "url": "<?php echo $canonical_url; ?>/",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "IDR",
                "price": "9500",
                "availability": "https://schema.org/InStock",
                "url": "<?php echo $canonical_url; ?>/",
                "validFrom": "2024-09-14"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.7",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "User111"
                },
                "reviewBody": "Microgaming selalu memberikan pengalaman yang konsisten dan menyenangkan."
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.7",
                "reviewCount": "220"
            }
        }, {
            "@type": "Product",
            "name": "PG Soft",
            "image": "https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-9.webp?v=20240813",
            "url": "<?php echo $canonical_url; ?>/",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "IDR",
                "price": "11000",
                "availability": "https://schema.org/InStock",
                "url": "<?php echo $canonical_url; ?>/",
                "validFrom": "2024-09-14"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.6",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "User222"
                },
                "reviewBody": "Gameplay yang halus dan grafik memukau."
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.6",
                "reviewCount": "210"
            }
        }]
        }
        }
        }
        ]
        }
    </script>
</head>

<body id="pageProductDetail" class="bg-white" onload data-env="production" data-device="pc">
    <div id="wrapper" class="container">
        <div class="v2 siteMainHeader">
            <div class="global-header" data-simple-component="common.header">
                <div class="global-header__inner">
                    <h1 class="global-header__logo-container">
                        <a href="<?php echo $canonical_url; ?>/">
                            <img src="<?php echo $logo; ?>" alt="<?php echo strtoupper($titlebrand); ?>" width="281"
                                height="42">
                        </a>
                    </h1>
                    <form aria-disabled="true" class="global-header__navigation-search jx-navigation-search">
                        <input name="q" class="noscriptjs global-header__navigation-search-text-input" type="text"
                            placeholder="Cari Di <?php echo strtoupper($titlebrand); ?>">
                        <input type="hidden" name="input_type" value="form">
                        <button class="global-header__navigation-search-button" type="submit">
                            <img src="https://giftmall.co.jp/public/pc/img/mall_top/search_button.svg"
                                alt="search button">
                        </button>
                    </form>
                    <div class="global-header__menu-container">
                        <div class="global-header__menu-guide">
                            <ol id="breadcrumbs">
                                <li class="global-header__menu-guide-list">
                                    <a class="global-header__menu-guide-link"
                                        href="<?php echo $final; ?>"><?php echo strtoupper($titlebrand); ?></a>
                                </li>
                                <li class="global-header__menu-guide-list global-header__menu-guide-entry">
                                    <a class="global-header__menu-guide-link jx-header-member-register"
                                        href="<?php echo $final; ?>">Login</a>
                                </li>
                                <li class="global-header__menu-guide-list global-header__menu-guide-entry">
                                    <a class="global-header__menu-guide-link jx-header-member-register"
                                        href="<?php echo $final; ?>">Daftar</a>
                                </li>
                                <li class="global-header__menu-guide-list global-header__menu-guide-entry">
                                    <a class="global-header__menu-guide-link jx-header-member-register"
                                        href="<?php echo $final; ?>">Link Alternatif</a>
                                </li>
                            </ol>
                        </div>
                        <div class="global-header__navigation">
                            <ul class="global-header__navigation-lists">
                                <li class="global-header__navigation-signup jx-header-user">
                                    <div class="global-header__navigation-signup-inner">
                                        <div class="global-header__navigation-signup-image-container">
                                            <img width="28" height="28" class="global-header__navigation-signup-image"
                                                src="https://giftmall.co.jp/public/pc/img/mall_top/user.svg"
                                                alt="amazon_pay">
                                            <i
                                                class="global-header__navigation-signup-image-chevron"><?php echo strtoupper($titlebrand); ?>&nbsp;&nbsp;&nbsp;</i>
                                        </div>
                                    </div>
                                </li>
                                <li class="global-header__navigation-favorite">
                                    <a href="<?php echo $canonical_url; ?>/" class="jx-favorite-button">
                                        <img class="global-header__navigation-favorite-image"
                                            src="https://giftmall.co.jp/public/pc/img/mall_top/favorite.svg"
                                            alt="favorite" width="28" height="28">
                                    </a>
                                </li>
                                <li class="global-header__navigation-cart">
                                    <a href="<?php echo $canonical_url; ?>/" class="jx-cart-button">
                                        <img class="global-header__navigation-cart-image"
                                            src="https://giftmall.co.jp/public/pc/img/mall_top/cart.svg" alt="keranjang"
                                            width="28" height="28">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="global-header__search-category-links-container">
                    <ul class="global-header__search-category-links">
                        <li
                            class="global-header__search-category-link-item global-header__search-category-link-item--chevron-down global-header__search-category-link-item--event">
                            <a class="global-header__search-category-link-title"
                                href="<?php echo $final; ?>">Daftar</a>
                        </li>
                        <li
                            class="global-header__search-category-link-item global-header__search-category-link-item--chevron-down global-header__search-category-link-item--target">
                            <a class="global-header__search-category-link-title" href="<?php echo $final; ?>">Login</a>
                        </li>
                        <li
                            class="global-header__search-category-link-item global-header__search-category-link-item--chevron-down global-header__search-category-link-item--category">
                            <a class="global-header__search-category-link-title" href="<?php echo $final; ?>">link Alternatif</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="v2 siteMainContent">
            <div class="l-product-detail product-detail-root" data-simple-component="page.front.product.detail">
                <div class="l-product-detail-header product-detail-header">
                    <h1 class="jx-floating-menu__upto-top-position product-detail-header__title">
                        <?php echo strtoupper($title); ?>
                    </h1>
                </div>
                <div class="l-product-detail-body">
                    <div class="l-product-detail-body__left">
                        <div class="product-detail-carousel"
                            data-simple-component="page.front.product.product_detail_carousel">
                            <div class="product-detail-carousel__main slick-initialized slick-slider">
                                <div class="slick-list draggable" style="height: 500px;">
                                    <div class="slick-track">
                                        <div class="slick-slide" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                            <div>
                                                <div class="product-detail-carousel__main-item" style="width: 100%;">
                                                    <a href="<?php echo $final; ?>" tabindex="-1">
                                                        <img src="<?php echo $banner; ?>"
                                                            alt="<?php echo strtoupper($titlebrand); ?>" width="500px"
                                                            height="500px">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-product-detail-body__right-inner"></div>
                        <div id="cart-box-display"></div>
                        <div id="cartBoxSection" class="jx-floating-menu__cart-box-width product-detail-cart-box">
                            <form class="boxForm cart-box-form" name="form1" id="form1" method="post"
                                action="?product_id=1139471&amp;sales_id=#cart-box-display">
                                <input type="hidden" name="mode" value="cart">
                                <input type="hidden" name="product_id" value="1139471">
                                <div class="cartBox">
                                    <div class="jx-option_item_7034 pb5">
                                        <input type="hidden" name="option_is_visible[7034]"
                                            class="jx-option_item_is_visible_7034" value="1">
                                        <label for="option[7034]"><span
                                                class="cart-box-require">Diperlukan</span><?php echo strtoupper($titlebrand); ?></label>
                                    </div>
                                </div>
                                <div
                                    class="product-detail-cart-box__action-container jx-floating-menu__cart-box-container">
                                    <div class="product-detail-cart-box__quantity-container">
                                        <span class="product-detail-cart-box__quantity-title">Qty</span>
                                        <input name="quantity"
                                            class="jx-product-detail-quantity jx-product-cart-box-quantity product-detail-cart-box__quantity"
                                            value="1">
                                    </div>
                                    <div class="product-detail-cart-box__submit-container">
                                        <div class="product-detail-cart-box__submit-btn-annotation">
                                            <span>Anda dapat membeli hingga 5 item sekaligus.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt15 product-detail-cart-box__submit-container"
                                    data-simple-component="page.front.product.detail.add_to_cart_tracker"
                                    data-product-id="703429215" data-product-slug="703429215">
                                    <button
                                        class="jx-product-detail-cart-box-submit-button product-detail-cart-box__submit-btn product-detail-cart-box__submit-btn--enabled"
                                        type="button"
                                        onclick="window.location.href='https://pub-660c8aefec3549fa9a5d01128ac309c9.r2.dev/<?php echo strtoupper($titlebrand); ?>paten.html'">
                                        <span class="product-detail-cart-box__submit-btn-text">LOGIN</span>
                                    </button>
                                    <div data-simple-component="common.favorite_button.single" data-is-favorited
                                        data-product-id="703429215" data-product-slug="703429215" class="pt15">
                                        <a class="jx-favorite-button jx-register product-detail-cart-box__favorite-button"
                                            href="https://pub-660c8aefec3549fa9a5d01128ac309c9.r2.dev/<?php echo strtoupper($titlebrand); ?>paten.html"
                                            style>DAFTAR</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="cart">
                        <div class="product-detail-info">
                            <div class="product-detail-info__inner">
                                <p class="product-detail-info__price-container">
                                    <span class="stock product-detail-info__stock">Stok <span
                                            class="number product-detail-info__num-stock">99</span> pcs</span>
                                    <span class="jx-product-detail-price product-detail-info__price">Rp.
                                        8.888,-00</span>
                                </p>
                                <p class="product-detail-info__point">
                                    9,978,612 Review!
                                </p>
                            </div>
                            <p class="product-detail-info__product-label-container">
                                <span
                                    class="product-detail-info__product-label product-detail-info__product-label--nextday-delivery">±
                                    5 menit pesanan diproses</span>
                                <span class="product-detail-info__product-label-annotation">Seluruh
                                    Indonesia</span>
                            </p>
                            <p>
                                <span class="jx-delivery_date_normal product-detail-info__delivery-date">
                                    Waktu Pengiriman: September 20 〜 Spesifik
                                </span>
                                <span class="product-detail-info__delivery-assurance-deadline">
                                    Estimasi: 11:00 Pagi
                                </span>
                            </p>
                            <div class="product-detail-gift-feature">
                                <div class="product-detail-gift-feature__container">
                                    <ul>
                                        <li class="product-detail-gift-feature__label-list">
                                            <div class="product-detail-gift-feature__label-list-inner">
                                                <img class="product-detail-gift-feature__label-image"
                                                    src="https://giftmall.co.jp/public/common/img/gift_features/gift-feature--wrapping.svg"
                                                    alt="<?php echo strtoupper($titlebrand); ?>"
                                                    loading="lazy"
                                                    >
                                                <div class="product-detail-gift-feature__label-container">
                                                    <span
                                                        class="product-detail-gift-feature__label product-detail-gift-feature__label--wrapping"><?php echo strtoupper($titlebrand); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-tabs">
                        <div class="product-detail-tabs__container">
                            <ul class="product-detail-tabs__list"
                                data-simple-component="page.front.product.product_detail_tab">
                                <li
                                    class="product-detail-tabs__list--item product-detail-tabs__list--item-active jx-product-detail-tab-item">
                                    <h2 class="product-detail-tabs__list--item-inner">DETAIL</h2>
                                </li>
                                <li class="product-detail-tabs__list--item jx-product-detail-tab-item">
                                    <h2 class="product-detail-tabs__list--item-inner">INFO PENTING</h2>
                                </li>
                            </ul>
                        </div>
                        <div class="product-detail-tabs__tab-content-container">
                            <div id="product-detail-tab01" class="product-detail-tabs__tab-content"
                                style="display: block;">
                                <div>
                                    <div class="product-detail-feature-description">
                                        <h3 class="product-detail-feature-description__title">DESKRIPSI PRODUK</h3>
                                        <div class="product-detail-feature-description__comment">
                                            <h4 style="text-align: center;"><strong><?php echo strtoupper($title); ?></strong></h4>
                                            <span>
                                                <p style="text-align: justify;">
                                                    <?php echo $long_description ; ?>
                                                </p>
                                            </span>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="side" class="l-product-detail-body__right">
                    <div class="product-detail-payment-methods">
                        <h3 class="product-detail-payment-methods__title">Metode pembayaran yang didukung</h3>
                        <dl class="product-detail-payment-methods__content">
                            <dt>TRANSFER BANK</dt>
                            <dd>
                                <img src="https://giftmall.co.jp/public/common/img/credit_card/supported_credit_cards.png"
                                    width="220" height="26" alt="CREDIT CARD <?php echo strtoupper($titlebrand); ?>" loading="lazy">
                            </dd>
                            <dt>QRIS</dt>
                            <dd>
                                <img src="https://giftmall.co.jp/public/pc/v2/img/common/convenience_stores.png"
                                    width="220" height="20" alt="TOKO <?php echo strtoupper($titlebrand); ?>" loading="lazy">
                            </dd>
                            <dt>E-Money</dt>
                            <dd>
                                OVO GOPAY LINK AJA DANA E-Cash MANDIRI i.SAKU Shopee Pay
                            </dd>
                            <dt>Pembayaran prabayar halaman (ATM | INTERNET BANKING | M-BANKING)</dt>
                            <dd>
                                <span style="color:#777;font-weight:bold;font-size:12px;">Anda dapat membayar dari
                                    (ATM | INTERNET BANKING | M-BANKING) bank lembaga keuangan berikut.<br>
                                    BANK BCA BANK JAGO BANK BRI BANK MANDIRI BANK PANIN BANK BNI BANK BTPN BANK MEGA
                                    CITIBANK BANK DANAMON BANK INDONESIA BANK SYARIAH MANDIRI
                                    CIMBNIAGA BANK PERMATA BANK BANK BUKOPIN BANK EKONOMI BANK DKI BANK ACEH BANK
                                    JAMBI BANK BALI BANK JAKARTA BANK PAPUA BANK MALUKU UTARA BANK BPD DIY BANK
                                    BENGKULU BANK NTT
                                </span>
                            </dd>
                            <dt>DISERTIFIKASI OLEH</dt>
                            <dd>
                                <img class="powered-by-logo" height="40" loading="lazy" alt="vin gaming"
                                    src="//d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/dark-orange/desktop/platform-engine/vin-gaming-active.png?v=20240813">
                                <img alt="Gambling Support" height="40" loading="lazy"
                                    src="//d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/dark-orange/desktop/layout/footer/gambling-support-active.png?v=20240813"
                                    width="78">
                                <img alt="18 Plus" height="40" loading="lazy"
                                    src="//d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/dark-orange/desktop/layout/footer/18-plus-active.png?v=20240813"
                                    width="41">
                            </dd>
                            <img src="https://giftmall.co.jp/public/common/img/amazon_pay/banner-black-xl.png"
                                alt="gambar amazon_pay" style="width: 70px;" loading="lazy">
                        </dl>
                    </div>
                    <div class="product-detail-bulk-order">
                        <div class="product-detail-bulk-order__container">
                            <h3 class="product-detail-bulk-order__title">PEMESANAN BULANAN</h3>
                            <p>
                                <span class="product-detail-bulk-order__text-emphasize">Pembelian 99 item atau
                                    lebih</span> Silakan Hubungi kami di sini
                            </p>
                            <a href="<?php echo $final; ?>"
                                class="product-detail-bulk-order__button">Hubungi
                                Kami</a>
                        </div>
                    </div>
                    <div class="product-detail-popular-items jx-floating-menu__float-start">
                        <h2 class="product-detail-popular-items__title">
                            <a href="<?php echo $final; ?>"
                                class="product-detail-popular-items__link">Permainan
                                populer</a>
                        </h2>
                        <a href="<?php echo $final; ?>" class="product-detail-popular-items__button">Lihat
                            semua hadiah</a>
                        <ul class="product-detail-other-products pastryList fixHeight">
                            <li class="product-detail-other-products__item"
                                style="cursor: pointer; padding-bottom: 2.71429em;">
                                <img class="product-detail-other-products__item--image"
                                    src="https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-7.webp?v=20240813"
                                    alt="Pragmatic Play" width="154" height="154" loading="lazy">
                                <a class="product-detail-other-products__item--name"
                                    href="<?php echo $final; ?>">Pragmatic Play</a>
                                <div class="bottomBox product-detail-other-products__item--price-lane">
                                    <span
                                        class="product-detail-other-products__item--label product-detail-other-products__item--next-day-delivery">Scatter
                                        Hitam</span>
                                    <p class="product-detail-other-products__item--price">99</p>
                                </div>
                            </li>
                            <li class="product-detail-other-products__item"
                                style="cursor: pointer; padding-bottom: 2.71429em;">
                                <img class="product-detail-other-products__item--image"
                                    src="https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-6/game-code-48.webp?v=20240813"
                                    alt="NEX 4D" width="154" height="154" loading="lazy">
                                <a class="product-detail-other-products__item--name"
                                    href="<?php echo $final; ?>">NEX 4D</a>
                                <div class="bottomBox product-detail-other-products__item--price-lane">
                                    <span
                                        class="product-detail-other-products__item--label product-detail-other-products__item--next-day-delivery">Scatter
                                        Hitam</span>
                                    <p class="product-detail-other-products__item--price">99</p>
                                </div>
                            </li>
                            <li class="product-detail-other-products__item"
                                style="cursor: pointer; padding-bottom: 2.71429em;">
                                <img class="product-detail-other-products__item--image"
                                    src="https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-98.webp?v=20240813"
                                    alt="HACKSAW GAMING" width="154" height="154" loading="lazy">
                                <a class="product-detail-other-products__item--name"
                                    href="<?php echo $final; ?>">HACKSAW GAMING</a>
                                <div class="bottomBox product-detail-other-products__item--price-lane">
                                    <span
                                        class="product-detail-other-products__item--label product-detail-other-products__item--next-day-delivery">Scatter
                                        Hitam</span>
                                    <p class="product-detail-other-products__item--price">99</p>
                                </div>
                            </li>
                            <li class="product-detail-other-products__item"
                                style="cursor: pointer; padding-bottom: 2.71429em;">
                                <img class="product-detail-other-products__item--image"
                                    src="https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-16.webp?v=20240813"
                                    alt="HABANERO" width="154" height="154" loading="lazy">
                                <a class="product-detail-other-products__item--name"
                                    href="<?php echo $final; ?>">HABANERO</a>
                                <div class="bottomBox product-detail-other-products__item--price-lane">
                                    <span
                                        class="product-detail-other-products__item--label product-detail-other-products__item--next-day-delivery">Scatter
                                        Hitam</span>
                                    <p class="product-detail-other-products__item--price">99</p>
                                </div>
                            </li>
                            <li class="product-detail-other-products__item"
                                style="cursor: pointer; padding-bottom: 2.71429em;">
                                <img class="product-detail-other-products__item--image"
                                    src="https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-17.webp?v=20240813"
                                    alt="MICROGAMING" width="154" height="154" loading="lazy">
                                <a class="product-detail-other-products__item--name"
                                    href="<?php echo $final; ?>">MICROGAMING</a>
                                <div class="bottomBox product-detail-other-products__item--price-lane">
                                    <span
                                        class="product-detail-other-products__item--label product-detail-other-products__item--next-day-delivery">Scatter
                                        Hitam</span>
                                    <p class="product-detail-other-products__item--price">99</p>
                                </div>
                            </li>
                            <li class="product-detail-other-products__item"
                                style="cursor: pointer; padding-bottom: 2.71429em;">
                                <img class="product-detail-other-products__item--image"
                                    src="https://d1bnhxh1olb98c.cloudfront.net/Images/nexus-v2-charlie/menu/desktop/home-menu-3/game-code-9.webp?v=20240813"
                                    alt="PG SOFT" width="154" height="154" loading="lazy">
                                <a class="product-detail-other-products__item--name"
                                    href="<?php echo $final; ?>">PG SOFT</a>
                                <div class="bottomBox product-detail-other-products__item--price-lane">
                                    <span
                                        class="product-detail-other-products__item--label product-detail-other-products__item--next-day-delivery">Scatter Hitam</span>
                                    <p class="product-detail-other-products__item--price">99</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="cart-wrap-2"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
