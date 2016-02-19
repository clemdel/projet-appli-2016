<?php
/**
 * @Entity @Table(name="users_roles")
 **/
class users_roles {
	/** 
	 * @Id 
	 * @Column(type="integer") 
	 * @GeneratedValue 
	 **/
	protected $role_id;

	/** 
	 * @Column(type="string", nullable=false) 
	 **/
	protected $role_name;
}
?>