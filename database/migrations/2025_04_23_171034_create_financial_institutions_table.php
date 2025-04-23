<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('financial_institutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->date('registration_date')->nullable();
            $table->string('head_office');
            $table->integer('employee_count')->nullable();
            $table->bigInteger('loan_portfolio')->nullable();
            $table->bigInteger('extractives_amount')->nullable();
            $table->float('extractives_percent')->nullable();

            $table->json('mining_regions')->nullable();
            $table->json('asm_targets')->nullable();
            $table->json('intermediaries')->nullable();

            $table->boolean('has_dedicated_staff')->default(false);
            $table->integer('dedicated_staff_count')->nullable();
            $table->text('dedicated_staff_roles')->nullable();
            $table->float('gender_split_male')->nullable();
            $table->float('gender_split_female')->nullable();

            $table->json('services_offered')->nullable();
            $table->integer('loan_count')->nullable();
            $table->bigInteger('total_disbursed')->nullable();
            $table->bigInteger('average_loan_size')->nullable();
            $table->float('repayment_rate')->nullable();
            $table->float('default_rate')->nullable();
            $table->integer('repayment_term')->nullable();
            $table->float('female_borrowers_percent')->nullable();
            $table->string('group_vs_individual')->nullable();

            $table->json('collateral')->nullable();
            $table->json('loan_rejection_reasons')->nullable();

            $table->text('asm_policies')->nullable();
            $table->json('credit_scoring_data')->nullable();
            $table->text('risk_sharing')->nullable();
            $table->boolean('linked_value_chain')->default(false);
            $table->text('value_chain_desc')->nullable();
            $table->string('open_to_embedded_finance')->nullable();

            $table->string('gender_data_tracking')->nullable();
            $table->json('digital_tools')->nullable();
            $table->string('agent_mobile_use')->nullable();
            $table->json('digital_gaps')->nullable();

            $table->string('support_miners_bank')->nullable();
            $table->json('sovereign_roles')->nullable();
            $table->string('partner_cofinance')->nullable();
            $table->json('fiscal_reforms')->nullable();

            $table->json('successful_models')->nullable();
            $table->json('final_policy_suggestions')->nullable();

            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_institutions');
    }
};
