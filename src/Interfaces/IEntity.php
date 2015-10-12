<?php
	/**
	 * @Author: guluarte
	 * @Date:   2015-10-08 12:09:14
	 * @Last Modified by:   rguluarte
	 * @Last Modified time: 2015-10-12 08:57:22
	 */

namespace Guluarte\MsDynamicsCrmConnector;

interface IEntity {
	public function getAttributes();
	public function setAttributes();
	public function getEntityState();
	public function setEntityState();
	public function getId();
	public function setId();
	public function getLogicalName();
	public function setLogicalName();
	public function getRelatedEntities();
	public function Contains($attributeName);
	public function GetAttributeValue($attributeLogicalName);
	public function SetAttributeValue($attributeLogicalName, $value);
	public function SetRelatedEntities($relationshipSchemaName, $primaryEntityRole, \ArrayObject  $entities);
	public function SetRelatedEntity($relationshipSchemaName, $primaryEntityRole, $entity);
	public function ToEntity();
	public function ToEntityReference();
}