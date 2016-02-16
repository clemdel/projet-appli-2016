<?php
/**
 * @Entity @Table(name="events")
 **/
class Events {
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;

	/** @Column(type="string", nullable=false) **/
	protected $nom;

	/** @Column(type="date", nullable=false) **/
	protected $debut;

	/** @Column(type="date", nullable=false) **/
	protected $fin;
}
?>