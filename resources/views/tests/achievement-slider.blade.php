<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-slide {
            contain: size layout paint style;
        }

        .swiper-slide-card__content {
            display: flex;
            flex-direction: column;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .swiper-slide-card__preview {
            -webkit-mask-box-image-width: 0 12px 12px 12px;
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            justify-content: flex-end;
            mask-border-width: 0 12px 12px 12px;
            position: relative;
            height: 100%;
        }

        .swiper-slide-card__preview-media {
            background-color: #f8f8f8;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .interactive-preview-media {
            flex-grow: 1;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .interactive-preview-media__featured-image {
            height: 100%;
            position: absolute;
            width: 100%;
        }

        .swiper-slide .image-view {
            transition: transform .6s cubic-bezier(.35, 0, 0, 1);
        }

        .image-view {
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .image-view__container {
            height: calc(100% + 14px);
            left: -7px;
            position: relative;
            top: -7px;
            width: calc(100% + 14px);
        }

        .image-view__content {
            display: block;
            height: 100%;
            object-fit: cover;
            width: 100%;
        }

        .swiper-slide-card__preview-media::after {
            background-color: #000f1ead;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .swiper-slide-card__preview-content {
            align-items: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: center;
            left: 0;
            position: absolute;
            text-align: center;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .swiper-slide-card__preview {
            -webkit-mask-box-image-source: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNiIgaGVpZ2h0PSIzNiI+CiAgICA8cGF0aCBkPSJNIDAgMTIKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAxMiAwCiAgICAgICAgICAgICAgIEwgMjQgMAogICAgICAgICAgICAgICBBIDEyIDEyIDAgMCAwIDM2IDEyCiAgICAgICAgICAgICAgIEwgMzYgMjQKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAyNCAzNgogICAgICAgICAgICAgICBMIDEyIDM2CiAgICAgICAgICAgICAgIEEgMTIgMTIgMCAwIDAgMCAyNAogICAgICAgICAgICAgICBaIiBmaWxsPScjMDAwJy8+Cjwvc3ZnPgo=);
            -webkit-mask-box-image-slice: 12 fill;
            -webkit-mask-box-image-repeat: stretch;
            mask-border-repeat: stretch;
            mask-border-slice: 12 fill;
            mask-border-source: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNiIgaGVpZ2h0PSIzNiI+CiAgICA8cGF0aCBkPSJNIDAgMTIKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAxMiAwCiAgICAgICAgICAgICAgIEwgMjQgMAogICAgICAgICAgICAgICBBIDEyIDEyIDAgMCAwIDM2IDEyCiAgICAgICAgICAgICAgIEwgMzYgMjQKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAyNCAzNgogICAgICAgICAgICAgICBMIDEyIDM2CiAgICAgICAgICAgICAgIEEgMTIgMTIgMCAwIDAgMCAyNAogICAgICAgICAgICAgICBaIiBmaWxsPScjMDAwJy8+Cjwvc3ZnPgo=);
        }

        .swiper-slide-card__info {
            padding: 16px;
            -webkit-mask-box-image-width: 12px 12px 0 12px;
            background: #fff;
            flex: 0 0 auto;
            height: 15em;
            mask-border-width: 12px 12px 0 12px;
        }

        .swiper-slide-card__info {
            -webkit-mask-box-image-source: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNiIgaGVpZ2h0PSIzNiI+CiAgICA8cGF0aCBkPSJNIDAgMTIKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAxMiAwCiAgICAgICAgICAgICAgIEwgMjQgMAogICAgICAgICAgICAgICBBIDEyIDEyIDAgMCAwIDM2IDEyCiAgICAgICAgICAgICAgIEwgMzYgMjQKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAyNCAzNgogICAgICAgICAgICAgICBMIDEyIDM2CiAgICAgICAgICAgICAgIEEgMTIgMTIgMCAwIDAgMCAyNAogICAgICAgICAgICAgICBaIiBmaWxsPScjMDAwJy8+Cjwvc3ZnPgo=);
            -webkit-mask-box-image-slice: 12 fill;
            -webkit-mask-box-image-repeat: stretch;
            mask-border-repeat: stretch;
            mask-border-slice: 12 fill;
            mask-border-source: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNiIgaGVpZ2h0PSIzNiI+CiAgICA8cGF0aCBkPSJNIDAgMTIKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAxMiAwCiAgICAgICAgICAgICAgIEwgMjQgMAogICAgICAgICAgICAgICBBIDEyIDEyIDAgMCAwIDM2IDEyCiAgICAgICAgICAgICAgIEwgMzYgMjQKICAgICAgICAgICAgICAgQSAxMiAxMiAwIDAgMCAyNCAzNgogICAgICAgICAgICAgICBMIDEyIDM2CiAgICAgICAgICAgICAgIEEgMTIgMTIgMCAwIDAgMCAyNAogICAgICAgICAgICAgICBaIiBmaWxsPScjMDAwJy8+Cjwvc3ZnPgo=);
        }

        .swiper-slide-card__title {
            font-size: 18px;
            line-height: 24px;
            font-weight: 700;
            color: #1a1919;
        }

        .swiper-slide-card__date {
            margin-top: 8px;
            align-items: center;
            display: flex;
        }
        .event-feed-card__date-icon {
            fill: #1a1919;
            height: 20px;
            margin-top: 0;
            width: 20px;
        }

        .event-feed-card__date-text {
            color: #1a1919;
            display: block;
            font-family: var(--font-family--text-default, var(--fonts__family--text-default)), var(--font-family--text-fallback, var(--fonts__family--text-fallback));
            font-size: 17px;
            font-weight: 500;
            line-height: 24px;
            padding-left: 6px;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2022
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">6 - 11 February
                                2022</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>2nd Place in Asia</li>
                                <li>3rd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2021
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2021</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>2nd Place in Asia</li>
                                <li>6th Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2020
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2020</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>Debut CanSat Competition</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            Komurindo-Kombat 2019
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">
                                2019</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Rocket Payload Category</li>
                                <li>1st Place in EDF Rocket Category</li>
                                <li>3rd Place in the Atmospheric Balloon Payload</li>
                                <li>Best Presentation in EDF Rocket</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            Komurindo-Kombat 2018
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2018</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Rocket Payload</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-card__content">
                    <div class="swiper-slide-card__preview">
                        <div class="swiper-slide-card__preview-media">
                            <div class="interactive-preview-media">
                                <div class="interactive-preview-media__featured-image">
                                    <div class="image-view">
                                        <div class="image-view__container">
                                            <img class="image-view__content"
                                                src="https://ik.imagekit.io/eepisat/asset/2023.jpg" alt=""
                                                title="Awarding Session">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-card__info">
                        <div class="swiper-slide-card__title">
                            CanSat Competition 2023
                        </div>
                        <div class="swiper-slide-card__date">
                            <span class="event-feed-card__date-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.25 3.333h-3.333V2.5a.417.417 0 0 0-.417-.417h-.417a.417.417 0 0 0-.416.417v.833H8.333V2.5a.417.417 0 0 0-.416-.417H7.5a.417.417 0 0 0-.417.417v.833H3.75a.417.417 0 0 0-.417.417v12.5c0 .23.187.417.417.417h12.5c.23 0 .417-.187.417-.417V3.75a.417.417 0 0 0-.417-.417zm-.833 12.084H4.583V4.583h2.5v.834c0 .23.187.416.417.416h.417c.23 0 .416-.186.416-.416v-.834h3.334v.834c0 .23.186.416.416.416h.417c.23 0 .417-.186.417-.416v-.834h2.5v10.834z">
                                    </path>
                                </svg></span>
                            <time class="event-feed-card__date-text" datetime="2023-02-23T00:00:00Z">23 - 25 February
                                2023</time>
                        </div>
                        <div class="swiper-slide-card__location"></div>
                        <div class="swiper-slide-card__achievement">
                            <ul>
                                <li>1st Place in Indonesia</li>
                                <li>1st Place in Asia</li>
                                <li>2nd Place in the World</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
