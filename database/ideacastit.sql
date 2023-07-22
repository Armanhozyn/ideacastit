-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2022 at 07:34 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideacastit`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `picture`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Service construct deals physical...vvv', '<h3 class=\"postbox__title\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 34px; font-family: Archivo, sans-serif; transition: all 0.3s ease-out 0s;\">Service Construct deals physical damage with his basic attack in the match</h3><div class=\"postbox__text-single\" style=\"margin: 0px; padding: 0px; font-family: Archivo, sans-serif; font-size: 14px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">A great commerce experience cannot be distilled to a single number. It’s not a Lighthouse score, or a set of Core Web Vitals figures, although both are important inputs. A great commerce experience is a trilemma that carefully balances competing needs of delivering great customer experience, dynamic storefront capabilities, and long-term business — conversion, retention, re-engagement — objectives. As developers, we rightfully obsess about the customer experience, relentlessly working to squeeze every millisecond out of the critical rendering path, optimize input latency, and eliminate jank. At the limit, statically generated, edge delivered, and HTML-first pages look like the optimal strategy. That is until you are confronted with the realization that the next step function in improving conversion rates and business.</p><div class=\"tp-inner-pt-section mb-60 tp-border-bottom\" style=\"margin: 0px 0px 60px; padding: 0px; border-bottom: 1px solid var(--tp-border-1);\"><a href=\"http://127.0.0.1:8000/blog-details.html\" class=\"w-img\" style=\"margin: 0px; padding: 0px; color: inherit; text-decoration: none; transition: all 0.3s ease-out 0s; outline-style: none; outline-width: initial; border: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://127.0.0.1:8000/assets/img/blog/blog-list-2.jpg\" alt=\"\" style=\"margin: 0px 0px 30px; padding: 0px; transition: all 0.3s ease-out 0s; width: 0px;\"></a><h4 class=\"tp-inner-pt-section__title mb-30\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-weight: 700; font-size: 26px; font-family: var(--tp-ff-heading); transition: all 0.3s ease-out 0s;\">A cleansing hot shower or bath</h4><p class=\"mb-40\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">The journey, often, starts “simple” with localization. But then, quickly advances to contextual pricing, juggling complexity of large and frequently updated product catalog, managing continuously running multivariate tests and promotion campaigns, and serving customer-tailored dynamic recommendations. Eventually, you reach a realization that every page is similar to an open Tetris board where each “slot” can and should be dynamically tailored by dynamic visitor preferences, all powered by an ever-growing set of dynamic business rules.</p>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\"></p></div><div class=\"tp-inner-pt-section mb-60 tp-border-bottom\" style=\"margin: 0px 0px 60px; padding: 0px; border-bottom: 1px solid var(--tp-border-1);\"><h4 class=\"tp-inner-pt-section__title mb-30\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-weight: 700; font-size: 26px; font-family: var(--tp-ff-heading); transition: all 0.3s ease-out 0s;\">Setting the mood with incense</h4><div class=\"d-lg-flex\" style=\"margin: 0px; padding: 0px;\"><div class=\"sm-img pr-30\" style=\"margin: 0px; padding: 0px 30px 0px 0px;\"><img src=\"http://127.0.0.1:8000/assets/img/blog/blog-sm-single.jpg\" alt=\"\" style=\"margin: 0px 0px 30px; padding: 0px; transition: all 0.3s ease-out 0s;\"></div><div style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">From connecting back-office operations to front-of-the-house A/B testing and dynamic personalization for each customer, the shared foundation is fast server-side rendering powered by fast storefront data access. On top of this foundation, we add layers of caching, prerendering and edge delivery optimizations — not the other way around.</p></div></div></div><blockquote style=\"margin-bottom: 60px; padding: 50px; border: 2px solid rgb(243, 243, 243); display: inline-block;\"><div class=\"quote-box text-center\" style=\"margin: 0px; padding: 0px;\"><span class=\"quote-icon\" style=\"margin: 0px 0px 25px; padding: 0px; transition: all 0.3s ease-out 0s; color: var(--tp-common-white); text-transform: capitalize; width: 60px; height: 60px; font-size: 40px; background-color: var(--tp-theme-cornblue); line-height: 60px; display: inline-block; border-radius: 50%;\"><i class=\"flaticon-quote\" style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s;\"></i></span>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 28px; font-weight: 700; color: var(--tp-common-black); line-height: 1.3; transition: all 0.3s ease-out 0s; display: inline-block;\">Choices to take a holiday and travelling out inthis pandemic situation are limited. Why not take a stay action on quality.</p><cite style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: 700; display: block;\">Rosalina D. William</cite><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: var(--tp-grey-1); text-transform: capitalize;\">Founder</span></div></blockquote>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">Surveying the existing landscape of available developer tools and runtimes, we felt that there is a gap. Enabling dynamic commerce requires close integration between server and client, an optimized streaming and data fetch strategy, and a production platform that operates at scale. These are hard technical problems that Shopify can help solve and this is why we’ve been hard at work on the Hydrogen framework. It’s a React-based framework optimized for commerce and specialized to be powered by Shopify APIs and infrastructure: The future of commerce is dynamic and personalized.</p></div>', 'blog-gd-2_1666119558.jpg', 0, '2022-10-18 18:42:56', '2022-10-18 18:59:18'),
(4, 'Service construct deals physical...', '<h3 class=\"postbox__title\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 34px; font-family: Archivo, sans-serif; transition: all 0.3s ease-out 0s;\">Service Construct deals physical damage with his basic attack in the match</h3><div class=\"postbox__text-single\" style=\"margin: 0px; padding: 0px; font-family: Archivo, sans-serif; font-size: 14px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">A great commerce experience cannot be distilled to a single number. It’s not a Lighthouse score, or a set of Core Web Vitals figures, although both are important inputs. A great commerce experience is a trilemma that carefully balances competing needs of delivering great customer experience, dynamic storefront capabilities, and long-term business — conversion, retention, re-engagement — objectives. As developers, we rightfully obsess about the customer experience, relentlessly working to squeeze every millisecond out of the critical rendering path, optimize input latency, and eliminate jank. At the limit, statically generated, edge delivered, and HTML-first pages look like the optimal strategy. That is until you are confronted with the realization that the next step function in improving conversion rates and business.</p><div class=\"tp-inner-pt-section mb-60 tp-border-bottom\" style=\"margin: 0px 0px 60px; padding: 0px; border-bottom: 1px solid var(--tp-border-1);\"><a href=\"http://127.0.0.1:8000/blog-details.html\" class=\"w-img\" style=\"margin: 0px; padding: 0px; color: inherit; text-decoration: none; transition: all 0.3s ease-out 0s; outline-style: none; outline-width: initial; border: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://127.0.0.1:8000/assets/img/blog/blog-list-2.jpg\" alt=\"\" style=\"margin: 0px 0px 30px; padding: 0px; transition: all 0.3s ease-out 0s; width: 0px;\"></a><h4 class=\"tp-inner-pt-section__title mb-30\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-weight: 700; font-size: 26px; font-family: var(--tp-ff-heading); transition: all 0.3s ease-out 0s;\">A cleansing hot shower or bath</h4><p class=\"mb-40\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">The journey, often, starts “simple” with localization. But then, quickly advances to contextual pricing, juggling complexity of large and frequently updated product catalog, managing continuously running multivariate tests and promotion campaigns, and serving customer-tailored dynamic recommendations. Eventually, you reach a realization that every page is similar to an open Tetris board where each “slot” can and should be dynamically tailored by dynamic visitor preferences, all powered by an ever-growing set of dynamic business rules.</p>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\"></p></div><div class=\"tp-inner-pt-section mb-60 tp-border-bottom\" style=\"margin: 0px 0px 60px; padding: 0px; border-bottom: 1px solid var(--tp-border-1);\"><h4 class=\"tp-inner-pt-section__title mb-30\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-weight: 700; font-size: 26px; font-family: var(--tp-ff-heading); transition: all 0.3s ease-out 0s;\">Setting the mood with incense</h4><div class=\"d-lg-flex\" style=\"margin: 0px; padding: 0px;\"><div class=\"sm-img pr-30\" style=\"margin: 0px; padding: 0px 30px 0px 0px;\"><img src=\"http://127.0.0.1:8000/assets/img/blog/blog-sm-single.jpg\" alt=\"\" style=\"margin: 0px 0px 30px; padding: 0px; transition: all 0.3s ease-out 0s;\"></div><div style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">From connecting back-office operations to front-of-the-house A/B testing and dynamic personalization for each customer, the shared foundation is fast server-side rendering powered by fast storefront data access. On top of this foundation, we add layers of caching, prerendering and edge delivery optimizations — not the other way around.</p></div></div></div><blockquote style=\"margin-bottom: 60px; padding: 50px; border: 2px solid rgb(243, 243, 243); display: inline-block;\"><div class=\"quote-box text-center\" style=\"margin: 0px; padding: 0px;\"><span class=\"quote-icon\" style=\"margin: 0px 0px 25px; padding: 0px; transition: all 0.3s ease-out 0s; color: var(--tp-common-white); text-transform: capitalize; width: 60px; height: 60px; font-size: 40px; background-color: var(--tp-theme-cornblue); line-height: 60px; display: inline-block; border-radius: 50%;\"><i class=\"flaticon-quote\" style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s;\"></i></span>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 28px; font-weight: 700; color: var(--tp-common-black); line-height: 1.3; transition: all 0.3s ease-out 0s; display: inline-block;\">Choices to take a holiday and travelling out inthis pandemic situation are limited. Why not take a stay action on quality.</p><cite style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: 700; display: block;\">Rosalina D. William</cite><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: var(--tp-grey-1); text-transform: capitalize;\">Founder</span></div></blockquote>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">Surveying the existing landscape of available developer tools and runtimes, we felt that there is a gap. Enabling dynamic commerce requires close integration between server and client, an optimized streaming and data fetch strategy, and a production platform that operates at scale. These are hard technical problems that Shopify can help solve and this is why we’ve been hard at work on the Hydrogen framework. It’s a React-based framework optimized for commerce and specialized to be powered by Shopify APIs and infrastructure: The future of commerce is dynamic and personalized.</p></div>', 'blog-gd-3_1666119595.jpg', 0, '2022-10-18 18:59:55', '2022-10-18 18:59:55'),
(5, 'Service construct deals physical...', '<h3 class=\"postbox__title\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 34px; font-family: Archivo, sans-serif; transition: all 0.3s ease-out 0s;\">Service Construct deals physical damage with his basic attack in the match</h3><div class=\"postbox__text-single\" style=\"margin: 0px; padding: 0px; font-family: Archivo, sans-serif; font-size: 14px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">A great commerce experience cannot be distilled to a single number. It’s not a Lighthouse score, or a set of Core Web Vitals figures, although both are important inputs. A great commerce experience is a trilemma that carefully balances competing needs of delivering great customer experience, dynamic storefront capabilities, and long-term business — conversion, retention, re-engagement — objectives. As developers, we rightfully obsess about the customer experience, relentlessly working to squeeze every millisecond out of the critical rendering path, optimize input latency, and eliminate jank. At the limit, statically generated, edge delivered, and HTML-first pages look like the optimal strategy. That is until you are confronted with the realization that the next step function in improving conversion rates and business.</p><div class=\"tp-inner-pt-section mb-60 tp-border-bottom\" style=\"margin: 0px 0px 60px; padding: 0px; border-bottom: 1px solid var(--tp-border-1);\"><a href=\"http://127.0.0.1:8000/blog-details.html\" class=\"w-img\" style=\"margin: 0px; padding: 0px; color: inherit; text-decoration: none; transition: all 0.3s ease-out 0s; outline-style: none; outline-width: initial; border: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://127.0.0.1:8000/assets/img/blog/blog-list-2.jpg\" alt=\"\" style=\"margin: 0px 0px 30px; padding: 0px; transition: all 0.3s ease-out 0s; width: 0px;\"></a><h4 class=\"tp-inner-pt-section__title mb-30\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-weight: 700; font-size: 26px; font-family: var(--tp-ff-heading); transition: all 0.3s ease-out 0s;\">A cleansing hot shower or bath</h4><p class=\"mb-40\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">The journey, often, starts “simple” with localization. But then, quickly advances to contextual pricing, juggling complexity of large and frequently updated product catalog, managing continuously running multivariate tests and promotion campaigns, and serving customer-tailored dynamic recommendations. Eventually, you reach a realization that every page is similar to an open Tetris board where each “slot” can and should be dynamically tailored by dynamic visitor preferences, all powered by an ever-growing set of dynamic business rules.</p>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\"></p></div><div class=\"tp-inner-pt-section mb-60 tp-border-bottom\" style=\"margin: 0px 0px 60px; padding: 0px; border-bottom: 1px solid var(--tp-border-1);\"><h4 class=\"tp-inner-pt-section__title mb-30\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-weight: 700; font-size: 26px; font-family: var(--tp-ff-heading); transition: all 0.3s ease-out 0s;\">Setting the mood with incense</h4><div class=\"d-lg-flex\" style=\"margin: 0px; padding: 0px;\"><div class=\"sm-img pr-30\" style=\"margin: 0px; padding: 0px 30px 0px 0px;\"><img src=\"http://127.0.0.1:8000/assets/img/blog/blog-sm-single.jpg\" alt=\"\" style=\"margin: 0px 0px 30px; padding: 0px; transition: all 0.3s ease-out 0s;\"></div><div style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">From connecting back-office operations to front-of-the-house A/B testing and dynamic personalization for each customer, the shared foundation is fast server-side rendering powered by fast storefront data access. On top of this foundation, we add layers of caching, prerendering and edge delivery optimizations — not the other way around.</p></div></div></div><blockquote style=\"margin-bottom: 60px; padding: 50px; border: 2px solid rgb(243, 243, 243); display: inline-block;\"><div class=\"quote-box text-center\" style=\"margin: 0px; padding: 0px;\"><span class=\"quote-icon\" style=\"margin: 0px 0px 25px; padding: 0px; transition: all 0.3s ease-out 0s; color: var(--tp-common-white); text-transform: capitalize; width: 60px; height: 60px; font-size: 40px; background-color: var(--tp-theme-cornblue); line-height: 60px; display: inline-block; border-radius: 50%;\"><i class=\"flaticon-quote\" style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s;\"></i></span>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 28px; font-weight: 700; color: var(--tp-common-black); line-height: 1.3; transition: all 0.3s ease-out 0s; display: inline-block;\">Choices to take a holiday and travelling out inthis pandemic situation are limited. Why not take a stay action on quality.</p><cite style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: 700; display: block;\">Rosalina D. William</cite><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: var(--tp-grey-1); text-transform: capitalize;\">Founder</span></div></blockquote>&nbsp;<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: var(--tp-ff-p); font-size: 16px; color: var(--tp-grey-1); line-height: 26px; transition: all 0.3s ease-out 0s; display: inline-block;\">Surveying the existing landscape of available developer tools and runtimes, we felt that there is a gap. Enabling dynamic commerce requires close integration between server and client, an optimized streaming and data fetch strategy, and a production platform that operates at scale. These are hard technical problems that Shopify can help solve and this is why we’ve been hard at work on the Hydrogen framework. It’s a React-based framework optimized for commerce and specialized to be powered by Shopify APIs and infrastructure: The future of commerce is dynamic and personalized.</p></div>', 'blog-gd-4_1666119618.jpg', 0, '2022-10-18 19:00:18', '2022-10-18 19:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `topic`, `description`, `date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Backend Developer', '<h2 id=\"1-back-end-developer-tasks-and-responsibilities\" style=\"-webkit-font-smoothing: antialiased; margin: 3rem 0px 0px; padding: 0px; max-width: 100%; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 30px; line-height: 2.25rem; font-weight: 600; color: rgb(31, 31, 31); letter-spacing: -0.1px;\">Back-end developer tasks and responsibilities</h2><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\">Back-end developers are required to have technical expertise, analytical thinking, and excellent collaboration skills. As a back-end web developer, you should be able to work independently to design the web infrastructure.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\">Here’s what many back-end developers do on a day-to-day basis:</p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 20px; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; color: rgb(31, 31, 31); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Build and maintain websites:&nbsp;</span>A back-end developer’s main responsibility is to use various tools, frameworks, and languages to determine how best to develop intuitive, user-friendly prototypes and turn them into websites. This requires an understanding of cross-platform functionality and compatibility.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 20px; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; color: rgb(31, 31, 31); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Write high-quality code:&nbsp;</span>To produce sustainable web applications, developers must write clean and easily maintainable code.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 20px; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; color: rgb(31, 31, 31); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Perform quality assurance (QA) testing:&nbsp;</span>Create and oversee testing schedules to optimize user interface and experience, ensuring optimal display on various browsers and devices.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 20px; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; color: rgb(31, 31, 31); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Assess efficiency and speed:&nbsp;</span>Once a website is up and running, and during updates and edits, developers need to assess its performance and scalability, adjusting code as necessary.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 20px; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; color: rgb(31, 31, 31); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Troubleshoot and debug:&nbsp;</span>Be able to troubleshoot issues and resolve them, while communicating them to project managers, stakeholders, and QA teams.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px; color: rgb(31, 31, 31);\"></p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 20px; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; color: rgb(31, 31, 31); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Train and support:&nbsp;</span>Maintain workflows with client teams to ensure ongoing support, along with leading training and mentorship for junior developers.</p><h3 style=\"-webkit-font-smoothing: antialiased; margin: 3rem 0px 0px; padding: 0px; max-width: 100%; font-size: 24px; line-height: 1.75rem; font-weight: 600; color: rgb(31, 31, 31); letter-spacing: -0.1px;\">What tools do back-end developers use?</h3><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\">Web developers use a variety of tools to develop, test, and maintain web applications. Some common tools for back-end developers include:</p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><ul style=\"-webkit-font-smoothing: antialiased; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Programming languages:</p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 1em; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Python</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">PHP</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">JavaScript</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Ruby</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Java</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">C#</p></li></ul></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Frameworks:</p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 1em; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Laravel</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Django</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Spring</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Ruby on Rails</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Meteor</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Node.js</p></li></ul></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Databases:</p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 1em; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">MongoDB</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">MySQL</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Oracle</p></li></ul></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Servers:</p><ul style=\"-webkit-font-smoothing: antialiased; font-size: 1em; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Apache</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">NGINX</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Lighttpd</p></li><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\">Microsoft IIS</p></li></ul></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><h3 style=\"-webkit-font-smoothing: antialiased; margin: 3rem 0px 0px; padding: 0px; max-width: 100%; font-size: 24px; line-height: 1.75rem; font-weight: 600; color: rgb(31, 31, 31); letter-spacing: -0.1px;\">Back-end developer salary and job outlook</h3><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\">The estimated median base pay for a back-end web developer in the US is $115,604 as of June 2022, according to Glassdoor [<a href=\"https://www.glassdoor.com/Salaries/backend-developer-salary-SRCH_KO0,17.htm\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"-webkit-font-smoothing: antialiased; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 86, 210); text-decoration: underline; touch-action: manipulation;\">1</a>]. Indeed reports an average base salary of $95,072. [<a href=\"https://www.indeed.com/career/back-end-developer/salaries\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"-webkit-font-smoothing: antialiased; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 86, 210); text-decoration: underline; touch-action: manipulation;\">2</a>]. This can vary depending on your location, your seniority, and other factors.</p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\">Back-end developers are in high demand. According to the US Bureau of Labor Statistics, web developer positions are expected to grow by 13 percent between 2020 and 2030 [<a href=\"https://www.bls.gov/ooh/computer-and-information-technology/web-developers.htm\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"-webkit-font-smoothing: antialiased; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 86, 210); text-decoration: underline; touch-action: manipulation;\">3</a>].</p><h2 id=\"2-how-to-become-a-back-end-developer\" style=\"-webkit-font-smoothing: antialiased; margin: 3rem 0px 0px; padding: 0px; max-width: 100%; font-size: 30px; line-height: 2.25rem; font-weight: 600; color: rgb(31, 31, 31); letter-spacing: -0.1px;\">How to become a back-end developer?</h2><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\">There are many paths you can take to become a web developer. Whether you are a recent graduate or hoping to switch careers, it is important to assess what transferable skills you already have and consider building the new skills needed to pursue a back-end developer role.&nbsp;</p><h3 style=\"-webkit-font-smoothing: antialiased; margin: 3rem 0px 0px; padding: 0px; max-width: 100%; font-size: 24px; line-height: 1.75rem; font-weight: 600; color: rgb(31, 31, 31); letter-spacing: -0.1px;\">Back-end developer technical skills</h3><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\">As a back-end developer, there are certain technical skills you will need to learn to navigate developing the back-end of the web or mobile application.&nbsp;&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><ul style=\"-webkit-font-smoothing: antialiased; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Programming languages:&nbsp;</span>Any back-end developer needs to be well-versed in back-end programming languages such as Python, Java, and PHP. These make the website function when used alongside databases, frameworks, and servers. Python is one of the most popular programming languages because it is compatible with artificial intelligence (AI) and machine learning, and works well for writing clear and logical code. Basic knowledge of front-end languages HTML, CSS, and JavaScript is a bonus.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><ul style=\"-webkit-font-smoothing: antialiased; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Frameworks:&nbsp;</span>Frameworks are the libraries of back-end programming languages that help to build the server configuration. They tend to be linked with programming languages, so if you are familiar with Python, you’ll also know Flask, Django, or another Python-based framework, and so on.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><ul style=\"-webkit-font-smoothing: antialiased; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Databases and servers:&nbsp;</span>You’ll need to understand how to stack and recover data from databases, as back-end programming controls access to this information, including storage and recovery. MongoDB and MySQL are popular database programs. The database stores and organizes the client’s data so that it can be easily arranged and recovered, just like you might use cloud storage for your photos. This database then runs on a server that provides data upon request.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><ul style=\"-webkit-font-smoothing: antialiased; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Application Program Interface (API):&nbsp;</span>An API is a series of definitions and rules for developing application software. In addition to internet browser websites, companies often want a mobile app for iOS or Android. Knowledge of application-building languages like JavaScript will expand your job opportunities.&nbsp;</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\"></p><ul style=\"-webkit-font-smoothing: antialiased; outline: 0px; margin-bottom: 16px; padding-left: 45px; margin-left: 0px; letter-spacing: -0.1px;\"><li style=\"-webkit-font-smoothing: antialiased;\"><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; max-width: 100%; letter-spacing: -0.1px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 600; letter-spacing: -0.1px; font-size: inherit; line-height: inherit;\">Accessibility and security clearance:&nbsp;</span>You should develop knowledge of network protocols and web security. Knowing how to secure databases and servers will be critical to your success as a back-end developer.</p></li></ul><p style=\"-webkit-font-smoothing: antialiased; font-size: 18px; line-height: 1.75rem; margin: 24px 0px 0px; max-width: 100%; letter-spacing: -0.1px;\">If you are interested in the cloud, consider enrolling in IBM’s&nbsp;<a href=\"https://www.coursera.org/professional-certificates/ibm-full-stack-cloud-developer\" target=\"_self\" rel=\"\" style=\"-webkit-font-smoothing: antialiased; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 86, 210); text-decoration: underline; touch-action: manipulation;\">Full-Stack Cloud Developer</a>&nbsp;professional certificate for the full gamut of cloud-specific technologies. Guided by IBM experts, you will learn how to build cloud-based applications, understand front-end languages like HTML and CSS, back-end languages and frameworks like Express, Node.js, Python, and Django, and much more. These are foundational tools whether or not you decide to apply for cloud-related jobs.</p></li></ul>', '30 Sep 2022, Friday', '06:00,PM', 0, '2022-09-29 11:54:36', '2022-09-29 11:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `description` longtext,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 is active 0 is inactive',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `topic`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ASIFUDDOULA SAKIB', 'asifuddaola933@gmail.com', '01813175876', '2', 'sakib', 1, '2022-10-18 23:08:55', '2022-10-18 23:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leeds`
--

CREATE TABLE `leeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `career_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_menus`
--

CREATE TABLE `main_menus` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 is active 0 is inactive',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menus`
--

INSERT INTO `main_menus` (`id`, `name`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 1, '2022-09-17 01:23:23', '2022-09-27 18:09:43'),
(2, 'Software', 'iSchoolMS', 1, '2022-09-17 01:23:23', '2022-10-02 12:46:52'),
(3, 'Website', 'ideaE-com', 1, '2022-09-17 01:23:23', '2022-10-02 12:46:46'),
(4, 'Graphics Design', 'LogoDesign', 1, '2022-09-17 01:23:23', '2022-10-02 12:46:32'),
(5, 'Cloud Technology', 'AWS', 1, '2022-09-17 01:23:23', '2022-10-02 12:46:22'),
(6, 'Digital Marketing', 'SEO', 1, '2022-09-17 01:23:23', '2022-10-02 12:46:14'),
(7, 'About Us', 'aboutUS', 1, '2022-09-17 01:23:23', '2022-10-02 12:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_29_171346_create_careers_table', 2),
(6, '2022_09_29_171645_create_leeds_table', 2),
(7, '2022_10_19_000332_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) UNSIGNED NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 is active 0 is inactive',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `submenu_id`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'iSchoolMS', 1, '2022-09-18 00:02:08', '2022-09-23 02:57:46'),
(2, 37, 'faq', 1, '2022-09-20 13:16:33', '2022-09-21 00:16:01'),
(3, 39, 'contact', 1, '2022-09-20 13:38:45', '2022-09-21 00:16:07'),
(5, 38, 'blog', 1, '2022-09-21 12:03:54', '2022-09-21 12:03:54'),
(6, 36, 'caareers', 1, '2022-09-21 12:04:15', '2022-09-21 12:04:15'),
(7, 7, 'aboutUS', 1, '2022-09-21 12:04:26', '2022-09-21 12:04:26'),
(8, 34, 'whyUs', 1, '2022-09-21 12:04:34', '2022-09-21 12:04:34'),
(9, 35, 'leadership', 1, '2022-09-21 12:04:44', '2022-09-21 12:04:44'),
(10, 33, 'mv', 1, '2022-09-21 12:05:04', '2022-09-21 12:05:04'),
(11, 32, 'companyProfile', 1, '2022-09-21 16:28:50', '2022-09-21 16:28:50'),
(12, 2, 'iInventoryMS', 1, '2022-09-23 02:57:59', '2022-09-23 02:57:59'),
(13, 8, 'iTaskS', 1, '2022-09-23 02:58:14', '2022-09-23 02:58:14'),
(14, 9, 'iHRMSolution', 1, '2022-09-23 02:58:25', '2022-09-23 02:58:25'),
(15, 10, 'iHospitalMS', 1, '2022-09-23 02:58:36', '2022-09-23 02:58:36'),
(16, 11, 'iHotelMS', 1, '2022-09-23 02:58:45', '2022-09-23 02:58:45'),
(17, 12, 'iEcomS', 1, '2022-09-23 02:58:54', '2022-09-23 03:03:45'),
(18, 3, 'ideaE-com', 1, '2022-09-23 03:20:21', '2022-09-23 03:20:21'),
(19, 13, 'ideaCorporate', 1, '2022-09-23 03:20:36', '2022-09-23 03:20:36'),
(20, 14, 'WordpressSC', 1, '2022-09-23 03:20:45', '2022-09-23 03:20:45'),
(21, 15, 'UI/UX-WebDD', 1, '2022-09-23 03:20:55', '2022-09-23 03:20:55'),
(22, 16, '24/7-Support', 1, '2022-09-23 03:21:08', '2022-09-23 03:21:08'),
(23, 4, 'BrandingDesign', 1, '2022-09-23 03:39:45', '2022-09-23 03:39:45'),
(24, 17, 'SocailMediaDesign', 1, '2022-09-23 03:39:53', '2022-09-23 03:39:53'),
(25, 18, 'CompanyProfileDesign', 1, '2022-09-23 03:40:05', '2022-09-23 03:40:05'),
(26, 19, 'LogoDesign', 1, '2022-09-23 03:40:25', '2022-09-23 03:40:25'),
(27, 20, 'BannerDesgin', 1, '2022-09-23 03:40:32', '2022-09-23 03:40:32'),
(28, 21, 'BrochureDesign', 1, '2022-09-23 03:40:38', '2022-09-23 03:40:38'),
(29, 22, 'BookCoverDesign', 1, '2022-09-23 03:40:45', '2022-09-23 03:40:45'),
(30, 23, 'Backgroundremove', 1, '2022-09-23 03:40:51', '2022-09-23 03:40:51'),
(31, 24, 'UIUXGraphics', 1, '2022-09-23 03:41:00', '2022-09-23 03:41:00'),
(32, 5, 'AWS', 1, '2022-09-23 04:00:01', '2022-09-23 04:00:01'),
(33, 25, 'Azure', 1, '2022-09-23 04:00:09', '2022-09-23 04:00:09'),
(34, 26, 'VPS', 1, '2022-09-23 04:00:16', '2022-09-23 04:00:16'),
(35, 27, 'DomainHosting', 1, '2022-09-23 04:00:24', '2022-09-23 04:00:24'),
(36, 6, 'SEO', 1, '2022-09-23 04:00:33', '2022-09-23 04:00:33'),
(37, 28, 'SMM', 1, '2022-09-23 04:00:46', '2022-09-23 04:00:46'),
(38, 29, 'EmailMarketing', 1, '2022-09-23 04:01:56', '2022-09-23 04:01:56'),
(39, 30, 'BrandMarketing', 1, '2022-09-23 04:02:13', '2022-09-23 04:02:13'),
(40, 31, 'ContentWritting', 1, '2022-09-23 04:02:22', '2022-09-23 04:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` int(11) UNSIGNED NOT NULL,
  `menu_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 is active 0 is inactive',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `menu_id`, `name`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'idea School Management System (iSMS)', 'iSchoolMS', 1, '2022-09-17 01:33:20', '2022-09-27 18:11:27'),
(2, 2, 'idea Inventory Management System(iIMS)', 'iInventoryMS', 1, '2022-09-17 01:33:29', '2022-09-27 18:12:00'),
(3, 3, 'idea E-commerece Website', 'ideaE-com', 1, '2022-09-17 01:33:55', '2022-09-27 18:12:44'),
(4, 4, 'Branding Design', 'BrandingDesign', 1, '2022-09-17 01:34:09', '2022-09-27 18:14:16'),
(5, 5, 'AWS Cloud Services', 'AWS', 1, '2022-09-17 01:34:19', '2022-09-27 18:14:26'),
(6, 6, 'Search Engine Optimization (SEO)', 'SEO', 1, '2022-09-17 01:34:34', '2022-09-27 18:14:38'),
(7, 7, 'About ideaCast IT', 'aboutUS', 1, '2022-09-17 01:34:42', '2022-09-27 18:13:52'),
(8, 2, 'idea Task Scheduler(iTS)', 'iTaskS', 1, '2022-09-17 01:57:26', '2022-09-27 18:13:00'),
(9, 2, 'idea HRM Solution (iHRMS)', 'iHRMSolution', 1, '2022-09-17 01:57:34', '2022-09-27 18:13:16'),
(10, 2, 'idea Hospital Management System (iHMS)', 'iHospitalMS', 1, '2022-09-17 01:57:44', '2022-09-27 18:13:28'),
(11, 2, 'idea Hotel Management System (iHMS)', 'iHotelMS', 1, '2022-09-17 01:57:53', '2022-09-27 18:14:52'),
(12, 2, 'idea E-commerce Solution (iES)', 'iEcomS', 1, '2022-09-17 01:58:02', '2022-09-27 18:15:02'),
(13, 3, 'idea Corporate/Business Website', 'ideaCorporate', 1, '2022-09-17 01:58:13', '2022-09-27 18:15:28'),
(14, 3, 'Wordpress Site Customization', 'WordpressSC', 1, '2022-09-17 01:58:34', '2022-09-27 18:15:40'),
(15, 3, 'UI/UX to Website Desgin & Development', 'UI/UX-WebDD', 1, '2022-09-17 01:58:41', '2022-09-27 18:15:54'),
(16, 3, '24/7 Website Support', '24/7-Support', 1, '2022-09-17 01:58:49', '2022-09-27 18:16:09'),
(17, 4, 'Social Media Design', 'SocailMediaDesign', 1, '2022-09-17 01:58:59', '2022-09-27 18:16:19'),
(18, 4, 'Company Profile Design', 'CompanyProfileDesign', 1, '2022-09-17 01:59:07', '2022-09-27 18:16:41'),
(19, 4, 'Eye-Catching Logo Design', 'LogoDesign', 1, '2022-09-17 01:59:15', '2022-09-27 18:16:53'),
(20, 4, 'Banner Desgin', 'BannerDesgin', 1, '2022-09-17 01:59:25', '2022-09-27 18:17:12'),
(21, 4, 'Brochure Design', 'BrochureDesign', 1, '2022-09-17 01:59:34', '2022-09-27 18:17:18'),
(22, 4, 'Book Cover Design', 'BookCoverDesign', 1, '2022-09-17 01:59:41', '2022-09-27 18:17:24'),
(23, 4, 'Background Remove', 'Backgroundremove', 1, '2022-09-17 01:59:59', '2022-09-27 18:17:32'),
(24, 4, 'UI/UX Design', 'UIUXGraphics', 1, '2022-09-17 02:00:08', '2022-09-27 18:17:37'),
(25, 5, 'Azure Cloud Services', 'Azure', 1, '2022-09-17 02:00:24', '2022-09-27 18:17:45'),
(26, 5, 'VPS Cloud Services', 'VPS', 1, '2022-09-17 02:00:40', '2022-09-27 18:17:57'),
(27, 5, 'Domain & Hosting Services', 'DomainHosting', 1, '2022-09-17 02:00:48', '2022-09-27 18:18:00'),
(28, 6, 'Social media marketing (SMM)', 'SMM', 1, '2022-09-17 02:01:04', '2022-09-27 18:18:08'),
(29, 6, 'Email Marketing', 'EmailMarketing', 1, '2022-09-17 02:01:12', '2022-09-27 18:18:17'),
(30, 6, 'Brand Marketing', 'BrandMarketing', 1, '2022-09-17 02:01:21', '2022-09-27 18:18:23'),
(31, 6, 'Content Writting', 'ContentWritting', 1, '2022-09-17 02:01:29', '2022-09-27 18:18:28'),
(32, 7, 'Company Profile', 'companyProfile', 1, '2022-09-17 02:05:23', '2022-09-27 18:19:27'),
(33, 7, 'Mission & Vision', 'mv', 1, '2022-09-17 02:05:30', '2022-09-27 18:19:20'),
(34, 7, 'Why choose us', 'whyUs', 1, '2022-09-17 02:05:39', '2022-09-27 18:19:14'),
(35, 7, 'Leadership', 'leadership', 1, '2022-09-17 02:05:47', '2022-09-27 18:19:09'),
(36, 7, 'Careers', 'careers', 1, '2022-09-17 02:05:55', '2022-09-30 21:13:57'),
(37, 7, 'FAQs', 'faq', 1, '2022-09-17 02:06:03', '2022-09-27 18:18:57'),
(38, 7, 'Blog', 'blog', 1, '2022-09-17 02:06:16', '2022-09-27 18:18:50'),
(39, 7, 'Contact', 'contact', 1, '2022-09-17 02:06:23', '2022-09-27 18:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sakib', 'sakib@gmail.com', NULL, '$2y$10$LovqE6gu/gF2p5tdR86pfOmO7y6ZOe21EujZ/VbBMLAqT8Wx2hUGC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leeds`
--
ALTER TABLE `leeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leeds_career_id_foreign` (`career_id`);

--
-- Indexes for table `main_menus`
--
ALTER TABLE `main_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leeds`
--
ALTER TABLE `leeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_menus`
--
ALTER TABLE `main_menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leeds`
--
ALTER TABLE `leeds`
  ADD CONSTRAINT `leeds_career_id_foreign` FOREIGN KEY (`career_id`) REFERENCES `careers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
