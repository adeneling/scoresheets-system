<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* TIER 1 */
        App\Category::create([
		    'name' => 'CS GraPARI',
	        'parent_category' => 'WALK IN',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 30,
	        'solution_skill' => 15,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 1,
		]);
		App\Category::create([
		    'name' => 'CS GraPARI Mitra',
	        'parent_category' => 'WALK IN',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 30,
	        'solution_skill' => 15,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 1,
		]);
		App\Category::create([
		    'name' => 'eCare Officer',
	        'parent_category' => 'CALL IN & E CARE',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 30,
	        'solution_skill' => 15,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 1,
		]);
		App\Category::create([
		    'name' => 'Agent Inbound',
	        'parent_category' => 'CALL IN & E CARE',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 30,
	        'solution_skill' => 15,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 1,
		]);
		App\Category::create([
		    'name' => 'Agent Outbound',
	        'parent_category' => 'CALL IN & E CARE',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 30,
	        'solution_skill' => 15,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 1,
		]);
		
		/* TIER 2 */
		App\Category::create([
		    'name' => 'Front Office Support (FOS)',
	        'parent_category' => 'BACK END SUPPORT',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 25,
	        'solution_skill' => 20,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 2,
		]);
		App\Category::create([
		    'name' => 'Complaint Handling Officer (CHO)',
	        'parent_category' => 'CALL IN & E CARE',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 25,
	        'solution_skill' => 20,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 2,
		]);				
		App\Category::create([
		    'name' => 'Back End Support (BES)',
	        'parent_category' => 'BACK END SUPPORT',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 25,
	        'solution_skill' => 20,
	        'inspirational_story' => 20,
	        'leadership' => 0,
	        'tier' => 2,
		]);
		/* TIER 3 */
		App\Category::create([
		    'name' => 'Team Leader Contact Center and eCare',
	        'parent_category' => 'CALL IN & E CARE',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 20,
	        'solution_skill' => 15,
	        'inspirational_story' => 10,
	        'leadership' => 20,
	        'tier' => 3,
		]);
		App\Category::create([
		    'name' => 'Team Leader GraPARI',
	        'parent_category' => 'WALK IN',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 20,
	        'solution_skill' => 15,
	        'inspirational_story' => 10,
	        'leadership' => 20,
	        'tier' => 3,
		]);
		App\Category::create([
		    'name' => 'Spv GraPARI',
	        'parent_category' => 'WALK IN',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 20,
	        'solution_skill' => 15,
	        'inspirational_story' => 10,
	        'leadership' => 20,
	        'tier' => 3,
		]);
		App\Category::create([
		    'name' => 'Spv GraPARI Mitra',
	        'parent_category' => 'WALK IN',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 20,
	        'solution_skill' => 15,
	        'inspirational_story' => 10,
	        'leadership' => 20,
	        'tier' => 3,
		]);
		App\Category::create([
		    'name' => 'Spv BES',
	        'parent_category' => 'BACK END SUPPORT',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 20,
	        'solution_skill' => 15,
	        'inspirational_story' => 10,
	        'leadership' => 20,
	        'tier' => 3,
		]);
		App\Category::create([
		    'name' => 'Spv Contact Center and eCare',
	        'parent_category' => 'BACK END SUPPORT',
	        'description' => '-',
	        'presentation_material' => 5,
	        'communication_skill' => 5,
	        'achievement' => 15,
	        'personal_value' => 10,
	        'customer_care_knowledge' => 20,
	        'solution_skill' => 15,
	        'inspirational_story' => 10,
	        'leadership' => 20,
	        'tier' => 3,
		]);
    }
}


