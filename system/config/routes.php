<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Core
 *
 * Sets the default route to "auth"
 */
$config['_default'] = 'auth';

// ADMIN ROUTES: START

/**
 * Items Routes
 */
$config['all-items'] = 'items/index';
$config['newly-added-items'] = 'items/newly_added';
$config['all-on-stock-items'] = 'items/on_stock';
$config['all-out-of-stock-items'] = 'items/out_of_stock';
$config['all-expired-items'] = 'items/expired';

/**
 * Transaction Routes
 */
$config['all-transactions'] = 'transactions/index';
$config['all-partial-transactions'] = 'transactions/allPartial';
$config['all-paid-transactions'] = 'transactions/allPaid';

/**
 * Office Budget Routes
 */
$config['all-budgets'] = 'office_budgets';
$config['approved-budgets'] = 'office_budgets/approvedBudgets';
$config['pending-budgets'] = 'office_budgets/pendingBudgets';



// ADMIN ROUTES: END

// OFFICE ROUTES: START
$config['office/dashboard'] = 'office/office_dashboard';
$config['office/requests'] = 'office/office_requests';
// OFFICE ROUTES: END