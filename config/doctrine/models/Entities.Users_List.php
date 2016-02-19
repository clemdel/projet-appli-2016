<?php
/**
 * @Entity @Table(name="users_list")
 **/
class users_list {
	/** 
	 * @Id @Column(type="integer") @GeneratedValue 
	 **/
	protected $user_id;

	/** 
	 * @Column(type="string", nullable=false) 
	 **/
	protected $user_name;

	/** 
	 * @Column(type="string", nullable=false) 
	 **/
	protected $user_firstname;

	/** 
	 * @ManyToOne(targetEntity="users_roles")
	 * @JoinColumn(name="role_id", referencedColumnName="role_id")
	 **/
	protected $user_role;
}
?>