Oro Yotpo Bundle
==============================
This bundle adds [Yotpo](https://www.yotpo.com/) marketing features to OroCommerce

Currently implemented features include:
* Customer Review widget on Product Page
* Conversion Tracking

Requirements
-------------------
* OroCommerce 3.X

Installation and Usage
-------------------
**NOTE: Adjust instructions as needed for your local environment**

1. Install via Composer:
    ```bash
    composer require friendsoforo/oro-yotpo-bundle
    ```
1. Purge Oro cache:
    ```bash
    php bin/console cache:clear --env=prod
    ```
1. Login to Oro Admin
1. Navigate to **System Configuration => Commerce => Friends of Oro => Yotpo Reviews**
1. Configure your [Yotpo App Key](https://support.yotpo.com/en/article/finding-your-app-key-and-your-secret-key) and activate individual features
1. Save the configuration and verify that it is now appearing on the frontend website

Roadmap / Remaining Tasks
-------------------
- [ ] Include correct price with Reviews Widget (eg RRP), may require configuration option?
- [ ] Implement Batch Job to push Completed/Shipped Orders into Yotpo (required for [Yotpo Automatic Review Requests](https://support.yotpo.com/en/article/map-mail-after-purchase))  
- [ ] Implement [Yotpo Star Ratings](https://support.yotpo.com/en/article/generic-other-platforms-installing-the-yotpo-star-rating) on Product Listing Pages
- [ ] Add support for [Yotpo Reviews Carousel](https://support.yotpo.com/en/article/reviews-carousel)

Licence
-------------------
[MIT - MIT License](./LICENSE)