<?php namespace Hardstuck\GuildWars2\BuildCodes\V2;
/** @remarks Incomplete, mostly for fixing 'curiosities' in the API. */
class ItemId {
	use Util\Enum;

	public const _UNDEFINED = 0;

	public const Superior_Rune_of_the_Scholar = 24836;

	public const Legendary_Rune_of_the_Traveler   = 91485;
	public const Legendary_Rune_of_Divinity       = 91428;

	public const Legendary_Sigil_of_Concentration = 91473;
	public const Legendary_Sigil_of_Paralysation  = 91398;
	public const Legendary_Sigil_of_Deamons       = 91388;
	public const Legendary_Sigil_of_Transference  = 91448;
	public const Legendary_Sigil_of_Renewal       = 91400;
	public const Legendary_Sigil_of_Energy        = 91441;

	public const Bowl_of_Sweet_and_spicy_Butternut_Squash_Soup = 41569;
	public const Tin_of_Fruitcake = 77569;

	public const Mighty_5_Agony_Infusion = 39620;
	public const Plus_9_Agony_Infusion   = 49432;
	public const Expertise_WvW_Infusion  = 87218;
	public const WxP_Enrichment          = 87417;

	public const Mist_Lords_Axe           = 91622;
	public const Mist_Lords_Dagger        = 91636;
	public const Mist_Lords_Mace          = 91671;
	public const Mist_Lords_Pistol        = 91675;
	public const Mist_Lords_Scepter       = 91619;
	public const Mist_Lords_Sword         = 91649;
	public const Mist_Lords_Focus         = 91657;
	public const Mist_Lords_Shield        = 91633;
	public const Mist_Lords_Torch         = 91653;
	public const Mist_Lords_Warhorn       = 91676;
	public const Mist_Lords_Greatsword    = 91646;
	public const Mist_Lords_Hammer        = 91652;
	public const Mist_Lords_Longbow       = 91632;
	public const Mist_Lords_Rifle         = 91637;
	public const Mist_Lords_Short_Bow     = 91628;
	public const Mist_Lords_Staff         = 91674;
	public const Harpoon_Gun_of_the_Scion = 90283;
	public const Impaler_of_the_Scion     = 90226;
	public const Trident_of_the_Scion     = 90637;

	public const Quiver_of_a_Thousand_Arrows = 37000;
	public const Black_Ice_Earing            = 79745;
	public const Asgeirs_Talisman            = 92706;
	public const Asgeirs_Amulet              = 92215;
	public const Black_Ice_Band              = 79712;
	public const Mistborn_Band               = 90369;

	public const Illustrious_Masque        = 85128; //light helmet
	public const Illustrious_Epaulets      = 84918; //light shoulders
	public const Illustrious_Doublet       = 85333; //light chest
	public const Illustrious_Wristguards   = 85070; //light gloves
	public const Illustrious_Breeches      = 85362; //light legs
	public const Illustrious_Footwear      = 80815; //light boots

	public const Illustrious_Visage        = 84862; //med helm
	public const Illustrious_Shoulderguard = 85182; //med shoulders
	public const Illustrious_Guise         = 84977; //med chest
	public const Illustrious_Grips         = 85169; //med gloves
	public const Illustrious_Leggings      = 85264; //med legs
	public const Illustrious_Striders      = 80836; //med boots

	public const Illustrious_Visor         = 85193; //heavy helm
	public const Illustrious_Pauldrons     = 84875; //heavy shoulders
	public const Illustrious_Breastplate   = 85084; //heavy chest
	public const Illustrious_Warfists      = 85140; //heavy gloves
	public const Illustrious_Tassets       = 84887; //heavy legs
	public const Illustrious_Greaves       = 85055; //heavy boots

	//Ritualists stuff
	public const Togos_Reaver        = 95781;
	public const Togos_Razor         = 96821;
	public const Togos_Flanged_Mace  = 96044;
	public const Togos_Revolver      = 97508;
	public const Togos_Wand          = 97272;
	public const Togos_Blade         = 97681;
	public const Togos_Artifact      = 97831;
	public const Togos_Bastion       = 97425;
	public const Togos_Brazier       = 97752;
	public const Togos_Herald        = 96544;
	public const Togos_Claymore      = 96433;
	public const Togos_Warhammer     = 96691;
	public const Togos_Greatbow      = 97791;
	public const Togos_Musket        = 97531;
	public const Togos_Short_Bow     = 96528;
	public const Togos_Spire         = 96869;
	public const Togos_Harpoon_Gun   = 97180;
	public const Togos_Impaler       = 96525;
	public const Togos_Trident       = 97555;

	public const Togos_Masque        = 96005;
	public const Togos_Epaulets      = 97313;
	public const Togos_Doublet       = 96962;
	public const Togos_Wristguards   = 96140;
	public const Togos_Breeches      = 97476;
	public const Togos_Footwear      = 96739;

	public const Togos_Visage        = 97440;
	public const Togos_Shoulderguard = 97862;
	public const Togos_Guise         = 97154;
	public const Togos_Grips         = 96795;
	public const Togos_Leggings      = 95714;
	public const Togos_Striders      = 97395;

	public const Togos_Visor         = 96711; 
	public const Togos_Pauldrons     = 96114; 
	public const Togos_Breastplate   = 96278; 
	public const Togos_Warfists      = 96967; 
	public const Togos_Tassets       = 97710; 
	public const Togos_Greaves       = 96932; 

	//Dragons stuff
	public const Suuns_Reaver        = 96835;
	public const Suuns_Razor         = 97295;
	public const Suuns_Flanged_Mace  = 96042;
	public const Suuns_Revolver      = 95852;
	public const Suuns_Wand          = 96254;
	public const Suuns_Blade         = 97308;
	public const Suuns_Artifact      = 95667;
	public const Suuns_Bastion       = 95987;
	public const Suuns_Brazier       = 96286;
	public const Suuns_Herald        = 95749;
	public const Suuns_Claymore      = 97260;
	public const Suuns_Warhammer     = 97156;
	public const Suuns_Greatbow      = 97748;
	public const Suuns_Musket        = 96796;
	public const Suuns_Short_Bow     = 96522;
	public const Suuns_Spire         = 97593;
	public const Suuns_Harpoon_Gun   = 96029;
	public const Suuns_Impaler       = 96974;
	public const Suuns_Trident       = 96417;
	
	public const Suuns_Masque        = 97161;
	public const Suuns_Epaulets      = 96731;
	public const Suuns_Doublet       = 95626;
	public const Suuns_Wristguards   = 97390;
	public const Suuns_Breeches      = 96818;
	public const Suuns_Footwear      = 96062;

	public const Suuns_Visage        = 96832;
	public const Suuns_Shoulderguard = 96236;
	public const Suuns_Guise         = 96431;
	public const Suuns_Grips         = 97663;
	public const Suuns_Leggings      = 96230;
	public const Suuns_Striders      = 96780;

	public const Suuns_Visor         = 95605;
	public const Suuns_Pauldrons     = 96966;
	public const Suuns_Breastplate   = 97812;
	public const Suuns_Warfists      = 97680;
	public const Suuns_Tassets       = 97540;
	public const Suuns_Greaves       = 95583;

	// dragons / ritu accessories
	public const Ad_Infinitum                = 74155;
	public const Mists_Charged_Jade_Talisman = 98322;
	public const Mists_Charged_Jade_Pendant  = 98299;
	public const Mists_Charged_Jade_Band     = 98321;
}
