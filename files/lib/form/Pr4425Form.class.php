<?php


namespace wcf\form;


use wcf\system\form\builder\container\RowFormContainer;
use wcf\system\form\builder\field\TitleFormField;

class Pr4425Form extends AbstractFormBuilderForm {
	protected function createForm() {
		parent::createForm();
		
		$this->form->appendChild(
			RowFormContainer::create('rowContainer1')->appendChildren([
				RowFormContainer::create('rowContainer2')->appendChild(TitleFormField::create())
			])
		);
	}
}
