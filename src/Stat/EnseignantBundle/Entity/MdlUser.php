<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUser
 *
 * @ORM\Table(name="mdl_user", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_user_mneuse_uix", columns={"mnethostid", "username"})}, indexes={@ORM\Index(name="mdl_user_del_ix", columns={"deleted"}), @ORM\Index(name="mdl_user_con_ix", columns={"confirmed"}), @ORM\Index(name="mdl_user_fir_ix", columns={"firstname"}), @ORM\Index(name="mdl_user_las_ix", columns={"lastname"}), @ORM\Index(name="mdl_user_cit_ix", columns={"city"}), @ORM\Index(name="mdl_user_cou_ix", columns={"country"}), @ORM\Index(name="mdl_user_las2_ix", columns={"lastaccess"}), @ORM\Index(name="mdl_user_ema_ix", columns={"email"}), @ORM\Index(name="mdl_user_aut_ix", columns={"auth"}), @ORM\Index(name="mdl_user_idn_ix", columns={"idnumber"}), @ORM\Index(name="mdl_user_fir2_ix", columns={"firstnamephonetic"}), @ORM\Index(name="mdl_user_las3_ix", columns={"lastnamephonetic"}), @ORM\Index(name="mdl_user_mid_ix", columns={"middlename"}), @ORM\Index(name="mdl_user_alt_ix", columns={"alternatename"})})
 * @ORM\Entity
 */
class MdlUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="auth", type="string", length=20, nullable=false)
     */
    private $auth = 'manual';

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmed", type="boolean", nullable=false)
     */
    private $confirmed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="policyagreed", type="boolean", nullable=false)
     */
    private $policyagreed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="suspended", type="boolean", nullable=false)
     */
    private $suspended = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mnethostid", type="bigint", nullable=false)
     */
    private $mnethostid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=255, nullable=false)
     */
    private $idnumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=false)
     */
    private $firstname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=false)
     */
    private $lastname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailstop", type="boolean", nullable=false)
     */
    private $emailstop = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="icq", type="string", length=15, nullable=false)
     */
    private $icq = '';

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=50, nullable=false)
     */
    private $skype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="yahoo", type="string", length=50, nullable=false)
     */
    private $yahoo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="aim", type="string", length=50, nullable=false)
     */
    private $aim = '';

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=50, nullable=false)
     */
    private $msn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone1", type="string", length=20, nullable=false)
     */
    private $phone1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=20, nullable=false)
     */
    private $phone2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=false)
     */
    private $institution = '';

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255, nullable=false)
     */
    private $department = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=120, nullable=false)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=30, nullable=false)
     */
    private $lang = 'en';

    /**
     * @var string
     *
     * @ORM\Column(name="calendartype", type="string", length=30, nullable=false)
     */
    private $calendartype = 'gregorian';

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=false)
     */
    private $theme = '';

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=100, nullable=false)
     */
    private $timezone = '99';

    /**
     * @var integer
     *
     * @ORM\Column(name="firstaccess", type="bigint", nullable=false)
     */
    private $firstaccess = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastaccess", type="bigint", nullable=false)
     */
    private $lastaccess = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastlogin", type="bigint", nullable=false)
     */
    private $lastlogin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="currentlogin", type="bigint", nullable=false)
     */
    private $currentlogin = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastip", type="string", length=45, nullable=false)
     */
    private $lastip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=15, nullable=false)
     */
    private $secret = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="picture", type="bigint", nullable=false)
     */
    private $picture = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailformat", type="boolean", nullable=false)
     */
    private $mailformat = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maildigest", type="boolean", nullable=false)
     */
    private $maildigest = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maildisplay", type="boolean", nullable=false)
     */
    private $maildisplay = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="autosubscribe", type="boolean", nullable=false)
     */
    private $autosubscribe = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="trackforums", type="boolean", nullable=false)
     */
    private $trackforums = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trustbitmask", type="bigint", nullable=false)
     */
    private $trustbitmask = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="imagealt", type="string", length=255, nullable=true)
     */
    private $imagealt;

    /**
     * @var string
     *
     * @ORM\Column(name="lastnamephonetic", type="string", length=255, nullable=true)
     */
    private $lastnamephonetic;

    /**
     * @var string
     *
     * @ORM\Column(name="firstnamephonetic", type="string", length=255, nullable=true)
     */
    private $firstnamephonetic;

    /**
     * @var string
     *
     * @ORM\Column(name="middlename", type="string", length=255, nullable=true)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="alternatename", type="string", length=255, nullable=true)
     */
    private $alternatename;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set auth
     *
     * @param string $auth
     * @return MdlUser
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Get auth
     *
     * @return string 
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     * @return MdlUser
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set policyagreed
     *
     * @param boolean $policyagreed
     * @return MdlUser
     */
    public function setPolicyagreed($policyagreed)
    {
        $this->policyagreed = $policyagreed;

        return $this;
    }

    /**
     * Get policyagreed
     *
     * @return boolean 
     */
    public function getPolicyagreed()
    {
        return $this->policyagreed;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return MdlUser
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set suspended
     *
     * @param boolean $suspended
     * @return MdlUser
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Get suspended
     *
     * @return boolean 
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set mnethostid
     *
     * @param integer $mnethostid
     * @return MdlUser
     */
    public function setMnethostid($mnethostid)
    {
        $this->mnethostid = $mnethostid;

        return $this;
    }

    /**
     * Get mnethostid
     *
     * @return integer 
     */
    public function getMnethostid()
    {
        return $this->mnethostid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return MdlUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlUser
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return MdlUser
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return MdlUser
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return MdlUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailstop
     *
     * @param boolean $emailstop
     * @return MdlUser
     */
    public function setEmailstop($emailstop)
    {
        $this->emailstop = $emailstop;

        return $this;
    }

    /**
     * Get emailstop
     *
     * @return boolean 
     */
    public function getEmailstop()
    {
        return $this->emailstop;
    }

    /**
     * Set icq
     *
     * @param string $icq
     * @return MdlUser
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;

        return $this;
    }

    /**
     * Get icq
     *
     * @return string 
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return MdlUser
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set yahoo
     *
     * @param string $yahoo
     * @return MdlUser
     */
    public function setYahoo($yahoo)
    {
        $this->yahoo = $yahoo;

        return $this;
    }

    /**
     * Get yahoo
     *
     * @return string 
     */
    public function getYahoo()
    {
        return $this->yahoo;
    }

    /**
     * Set aim
     *
     * @param string $aim
     * @return MdlUser
     */
    public function setAim($aim)
    {
        $this->aim = $aim;

        return $this;
    }

    /**
     * Get aim
     *
     * @return string 
     */
    public function getAim()
    {
        return $this->aim;
    }

    /**
     * Set msn
     *
     * @param string $msn
     * @return MdlUser
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string 
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     * @return MdlUser
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return MdlUser
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set institution
     *
     * @param string $institution
     * @return MdlUser
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string 
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return MdlUser
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return MdlUser
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return MdlUser
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return MdlUser
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return MdlUser
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set calendartype
     *
     * @param string $calendartype
     * @return MdlUser
     */
    public function setCalendartype($calendartype)
    {
        $this->calendartype = $calendartype;

        return $this;
    }

    /**
     * Get calendartype
     *
     * @return string 
     */
    public function getCalendartype()
    {
        return $this->calendartype;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return MdlUser
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return MdlUser
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set firstaccess
     *
     * @param integer $firstaccess
     * @return MdlUser
     */
    public function setFirstaccess($firstaccess)
    {
        $this->firstaccess = $firstaccess;

        return $this;
    }

    /**
     * Get firstaccess
     *
     * @return integer 
     */
    public function getFirstaccess()
    {
        return $this->firstaccess;
    }

    /**
     * Set lastaccess
     *
     * @param integer $lastaccess
     * @return MdlUser
     */
    public function setLastaccess($lastaccess)
    {
        $this->lastaccess = $lastaccess;

        return $this;
    }

    /**
     * Get lastaccess
     *
     * @return integer 
     */
    public function getLastaccess()
    {
        return $this->lastaccess;
    }

    /**
     * Set lastlogin
     *
     * @param integer $lastlogin
     * @return MdlUser
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    /**
     * Get lastlogin
     *
     * @return integer 
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * Set currentlogin
     *
     * @param integer $currentlogin
     * @return MdlUser
     */
    public function setCurrentlogin($currentlogin)
    {
        $this->currentlogin = $currentlogin;

        return $this;
    }

    /**
     * Get currentlogin
     *
     * @return integer 
     */
    public function getCurrentlogin()
    {
        return $this->currentlogin;
    }

    /**
     * Set lastip
     *
     * @param string $lastip
     * @return MdlUser
     */
    public function setLastip($lastip)
    {
        $this->lastip = $lastip;

        return $this;
    }

    /**
     * Get lastip
     *
     * @return string 
     */
    public function getLastip()
    {
        return $this->lastip;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return MdlUser
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set picture
     *
     * @param integer $picture
     * @return MdlUser
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return integer 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return MdlUser
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlUser
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionformat
     *
     * @param boolean $descriptionformat
     * @return MdlUser
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return boolean 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }

    /**
     * Set mailformat
     *
     * @param boolean $mailformat
     * @return MdlUser
     */
    public function setMailformat($mailformat)
    {
        $this->mailformat = $mailformat;

        return $this;
    }

    /**
     * Get mailformat
     *
     * @return boolean 
     */
    public function getMailformat()
    {
        return $this->mailformat;
    }

    /**
     * Set maildigest
     *
     * @param boolean $maildigest
     * @return MdlUser
     */
    public function setMaildigest($maildigest)
    {
        $this->maildigest = $maildigest;

        return $this;
    }

    /**
     * Get maildigest
     *
     * @return boolean 
     */
    public function getMaildigest()
    {
        return $this->maildigest;
    }

    /**
     * Set maildisplay
     *
     * @param boolean $maildisplay
     * @return MdlUser
     */
    public function setMaildisplay($maildisplay)
    {
        $this->maildisplay = $maildisplay;

        return $this;
    }

    /**
     * Get maildisplay
     *
     * @return boolean 
     */
    public function getMaildisplay()
    {
        return $this->maildisplay;
    }

    /**
     * Set autosubscribe
     *
     * @param boolean $autosubscribe
     * @return MdlUser
     */
    public function setAutosubscribe($autosubscribe)
    {
        $this->autosubscribe = $autosubscribe;

        return $this;
    }

    /**
     * Get autosubscribe
     *
     * @return boolean 
     */
    public function getAutosubscribe()
    {
        return $this->autosubscribe;
    }

    /**
     * Set trackforums
     *
     * @param boolean $trackforums
     * @return MdlUser
     */
    public function setTrackforums($trackforums)
    {
        $this->trackforums = $trackforums;

        return $this;
    }

    /**
     * Get trackforums
     *
     * @return boolean 
     */
    public function getTrackforums()
    {
        return $this->trackforums;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlUser
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlUser
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }

    /**
     * Set trustbitmask
     *
     * @param integer $trustbitmask
     * @return MdlUser
     */
    public function setTrustbitmask($trustbitmask)
    {
        $this->trustbitmask = $trustbitmask;

        return $this;
    }

    /**
     * Get trustbitmask
     *
     * @return integer 
     */
    public function getTrustbitmask()
    {
        return $this->trustbitmask;
    }

    /**
     * Set imagealt
     *
     * @param string $imagealt
     * @return MdlUser
     */
    public function setImagealt($imagealt)
    {
        $this->imagealt = $imagealt;

        return $this;
    }

    /**
     * Get imagealt
     *
     * @return string 
     */
    public function getImagealt()
    {
        return $this->imagealt;
    }

    /**
     * Set lastnamephonetic
     *
     * @param string $lastnamephonetic
     * @return MdlUser
     */
    public function setLastnamephonetic($lastnamephonetic)
    {
        $this->lastnamephonetic = $lastnamephonetic;

        return $this;
    }

    /**
     * Get lastnamephonetic
     *
     * @return string 
     */
    public function getLastnamephonetic()
    {
        return $this->lastnamephonetic;
    }

    /**
     * Set firstnamephonetic
     *
     * @param string $firstnamephonetic
     * @return MdlUser
     */
    public function setFirstnamephonetic($firstnamephonetic)
    {
        $this->firstnamephonetic = $firstnamephonetic;

        return $this;
    }

    /**
     * Get firstnamephonetic
     *
     * @return string 
     */
    public function getFirstnamephonetic()
    {
        return $this->firstnamephonetic;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     * @return MdlUser
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get middlename
     *
     * @return string 
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set alternatename
     *
     * @param string $alternatename
     * @return MdlUser
     */
    public function setAlternatename($alternatename)
    {
        $this->alternatename = $alternatename;

        return $this;
    }

    /**
     * Get alternatename
     *
     * @return string 
     */
    public function getAlternatename()
    {
        return $this->alternatename;
    }
}
