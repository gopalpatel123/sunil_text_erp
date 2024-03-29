<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Challan Entity
 *
 * @property int $id
 * @property int $voucher_no
 * @property int $financial_year_id
 * @property int $company_id
 * @property \Cake\I18n\FrozenDate $transaction_date
 * @property int $customer_id
 * @property float $amount_before_tax
 * @property float $total_cgst
 * @property float $total_sgst
 * @property float $total_igst
 * @property float $amount_after_tax
 * @property float $round_off
 * @property int $sales_ledger_id
 * @property int $party_ledger_id
 * @property int $location_id
 * @property string $invoice_receipt_type
 * @property float $receipt_amount
 * @property float $discount_amount
 * @property string $status
 *
 * @property \App\Model\Entity\FinancialYear $financial_year
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\SalesLedger $sales_ledger
 * @property \App\Model\Entity\PartyLedger $party_ledger
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\ChallanRow[] $challan_rows
 */
class Challan extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
