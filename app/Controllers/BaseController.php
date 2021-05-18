<?php

namespace App\Controllers;

use App\Models\A30Model;
use App\Models\A31aModel;
use App\Models\A31bModel;
use App\Models\A32aModel;
use App\Models\A33aModel;
use App\Models\A33bModel;
use App\Models\A34aModel;
use App\Models\A34bModel;
use App\Models\DetailekspedisiModel;
use App\Models\DetailKerusakanModel;
use App\Models\EkspedisiModel;
use App\Models\KerusakanModel;
use App\Models\MotorModel;
use App\Models\PenggunaModel;
use App\Models\TugasModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */

	protected $EkspedisiModel;
	protected $DetailEkspedisiModel;
	protected $KerusakanModel;
	protected $MotorModel;
	protected $PenggunaModel;
	protected $TugasModel;
	protected $A30Model;
	protected $A31aModel;
	protected $A31bModel;
	protected $A32aModel;
	protected $A33aModel;
	protected $A33bModel;
	protected $A34aModel;
	protected $A34bModel;
	protected $DetailKerusakanModel;

	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();

	}
	// create construct for models
	public function __construct()
	{
		$this->EkspedisiModel = new EkspedisiModel();
		$this->DetailEkspedisiModel = new DetailekspedisiModel();
		$this->KerusakanModel = new KerusakanModel();
		$this->MotorModel = new MotorModel();
		$this->PenggunaModel = new PenggunaModel();
		$this->TugasModel = new TugasModel();
		$this->DetailKerusakanModel = new DetailKerusakanModel();

		// tabel view
		$this->A30Model = new A30Model();
		$this->A31aModel = new A31aModel();
		$this->A31bModel = new A31bModel();
		$this->A32aModel = new A32aModel();
		$this->A33aModel = new A33aModel();
		$this->A33bModel = new A33bModel();
		$this->A34aModel = new A34aModel();
		$this->A34bModel = new A34bModel();
	}
}
