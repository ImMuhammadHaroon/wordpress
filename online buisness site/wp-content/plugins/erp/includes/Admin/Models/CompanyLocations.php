<?php

namespace WeDevs\ERP\Admin\Models;

use WeDevs\ERP\Framework\Model;

/**
 * Class CompanyLocations
 */
class CompanyLocations extends Model {
    protected $table = 'erp_company_locations';

    protected $fillable = [ 'name', 'address_1', 'address_2', 'city', 'state', 'zip', 'country' ];

//    public $timestamps = false;
}
