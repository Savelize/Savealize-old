<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'brand' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/brand/',    ),  ),  4 =>   array (  ),),
        'brand_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/brand',    ),  ),  4 =>   array (  ),),
        'brand_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/brand/new',    ),  ),  4 =>   array (  ),),
        'brand_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/brand/create',    ),  ),  4 =>   array (  ),),
        'brand_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/brand',    ),  ),  4 =>   array (  ),),
        'brand_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/brand',    ),  ),  4 =>   array (  ),),
        'brand_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/brand',    ),  ),  4 =>   array (  ),),
        'category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/',    ),  ),  4 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/new',    ),  ),  4 =>   array (  ),),
        'category_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/create',    ),  ),  4 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),),
        'category_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),),
        'subcategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subcategory/',    ),  ),  4 =>   array (  ),),
        'subcategory_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subcategory',    ),  ),  4 =>   array (  ),),
        'subcategory_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subcategory/new',    ),  ),  4 =>   array (  ),),
        'subcategory_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subcategory/create',    ),  ),  4 =>   array (  ),),
        'subcategory_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subcategory',    ),  ),  4 =>   array (  ),),
        'subcategory_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subcategory',    ),  ),  4 =>   array (  ),),
        'subcategory_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subcategory',    ),  ),  4 =>   array (  ),),
        'company' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/company/',    ),  ),  4 =>   array (  ),),
        'company_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),),
        'company_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/company/new',    ),  ),  4 =>   array (  ),),
        'company_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/company/create',    ),  ),  4 =>   array (  ),),
        'company_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),),
        'company_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),),
        'company_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/company',    ),  ),  4 =>   array (  ),),
        'product' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/',    ),  ),  4 =>   array (  ),),
        'product_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),),
        'product_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/new',    ),  ),  4 =>   array (  ),),
        'product_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/create',    ),  ),  4 =>   array (  ),),
        'product_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),),
        'product_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),),
        'product_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),),
        'useraccount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/useraccount/',    ),  ),  4 =>   array (  ),),
        'useraccount_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/useraccount',    ),  ),  4 =>   array (  ),),
        'useraccount_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/useraccount/new',    ),  ),  4 =>   array (  ),),
        'useraccount_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/useraccount/create',    ),  ),  4 =>   array (  ),),
        'useraccount_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/useraccount',    ),  ),  4 =>   array (  ),),
        'useraccount_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/useraccount',    ),  ),  4 =>   array (  ),),
        'useraccount_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/useraccount',    ),  ),  4 =>   array (  ),),
        'adminaccount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminaccount/',    ),  ),  4 =>   array (  ),),
        'adminaccount_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adminaccount',    ),  ),  4 =>   array (  ),),
        'adminaccount_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminaccount/new',    ),  ),  4 =>   array (  ),),
        'adminaccount_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminaccount/create',    ),  ),  4 =>   array (  ),),
        'adminaccount_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adminaccount',    ),  ),  4 =>   array (  ),),
        'adminaccount_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adminaccount',    ),  ),  4 =>   array (  ),),
        'adminaccount_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/adminaccount',    ),  ),  4 =>   array (  ),),
        'site_savalize_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'site_user_page4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::usrhistoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usrhistory',    ),  ),  4 =>   array (  ),),
        'site_company_page10' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::page10Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/page10',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
