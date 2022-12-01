<?php

class Pages extends Controller
{


    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome',
        ];

        $this->view('pages/index', $data);
    }


    public function task_one()
    {
        $data = ['title' => 'Task One'];

        $this->view('inc/header', $data);
        $this->view('pages/task_one', $data);
        $this->view('inc/footer', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'users' => $this->userModel->getUsers()
        ];

        $this->view('inc/header', $data);
        $this->view('pages/dashboard', $data);
        $this->view('inc/footer', $data);
    }

    public function add()
    {

        // echo '<pre>';
        // var_dump($_FILES);
        // echo '</pre>';
        // Dump::dd($_POST);
        //Check request method
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form

            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [

                'first_name' =>  trim($_POST['first_name']),
                'last_name' =>  trim($_POST['last_name']),
                'dob' =>  trim($_POST['dob']),
                'country' =>  trim($_POST['country']),
                'city' =>  trim($_POST['city']),
                'address' =>  trim($_POST['address']),
                'card_number' =>  trim($_POST['card_number']),
                'expiry_year' =>  trim($_POST['expiry_year']),
                'expiry_month' =>  trim($_POST['expiry_month']),
                'card_cvv' =>  trim($_POST['card_cvv']),
            ];

            $data['error'] = [];

            //Validate first_name
            if (empty($data['first_name'])) {
                $data['first_name_error'] = 'Please enter your firstname.';
                array_push($data['error'], $data['first_name_error']);
            }


            //Validate last_name
            if (empty($data['last_name'])) {
                $data['last_name_error'] = 'Please enter your lastname.';
                array_push($data['error'], $data['last_name_error']);
            }

            //Validate country
            if (empty($data['country'])) {
                $data['country_error'] = 'Please select your country.';
                array_push($data['error'], $data['country_error']);
            }


            //Validate city
            if (empty($data['city'])) {
                $data['city_error'] = 'Please enter city.';
                array_push($data['error'], $data['city_error']);
            }


            //Validate dob
            if (empty($data['dob'])) {
                $data['dob_error'] = 'Please select your dob.';
                array_push($data['error'], $data['dob_error']);
            }


            //Validate card_number
            if (empty($data['card_number'])) {
                $data['card_number_error'] = 'Please enter card number.';
                array_push($data['error'], $data['card_number_error']);
            }


            //Validate expiry_year
            if (empty($data['expiry_year'])) {
                $data['expiry_year_error'] = 'Please enter your card expiry year.';
                array_push($data['error'], $data['expiry_year_error']);
            }

            //Validate expiry_month
            if (empty($data['expiry_month'])) {
                $data['expiry_month_error'] = 'Please enter your card expiry month.';
                array_push($data['error'], $data['expiry_month_error']);
            }

            //Validate card_cvv
            if (empty($data['card_cvv'])) {
                $data['card_cvv_error'] = 'Please enter your card (cvv/cvc/cid).';
                array_push($data['error'], $data['card_cvv_error']);
            }

            // Validate profilephoto
            if (isset($_FILES['profile_photo'])) {

                $filename = $_FILES['profile_photo']['name'];
                $filetype = $_FILES['profile_photo']['type'];
                $filetemp = $_FILES['profile_photo']['tmp_name'];
                $file_error = $_FILES['profile_photo']['error'];
                $filesize = $_FILES['profile_photo']['size'];

                if ($file_error > 0) {
                    $data['profile_photo_error_one'] = "You have not selected any file for upload!";
                    array_push($data['error'], $data['profile_photo_error_one']);
                }

                if ($filesize > 2097152) {
                    $data['profile_photo_error_two'] = "Image should be less than 2megabytes!";
                    array_push($data['error'], $data['profile_photo_error_two']);
                }

                $extensions = array("jpg", "png", "jpeg", "gif");
                $file_ext = explode(".", $filename);
                $file_ext = end($file_ext);
                $file_ext_lowerCase = strtolower($file_ext);

                if (!in_array($file_ext_lowerCase, $extensions)) {
                    $data['profile_photo_error_three'] = "File type is not allowed";
                    array_push($data['error'], $data['profile_photo_error_three']);
                }
            }


            //Make sure  errors are empty
            if (empty($data['error'])) {

                // Upload photo
                $filename = $_FILES['profile_photo']['name'];
                $filetype = $_FILES['profile_photo']['type'];
                $filetemp = $_FILES['profile_photo']['tmp_name'];
                $file_error = $_FILES['profile_photo']['error'];
                $filesize = $_FILES['profile_photo']['size'];

                $extensions = array("jpg", "png", "jpeg", "gif");
                $file_ext = explode(".", $filename);
                $file_ext = end($file_ext);
                $file_ext_lowerCase = strtolower($file_ext);


                $profilePhotoName = rand() . time() . "." . "$file_ext_lowerCase";
                $destination = "../public/assets/profile_photos/" . $profilePhotoName;

                move_uploaded_file($filetemp, $destination);

                $data['profile_photo'] =  BASE_URL . "/public/assets/profile_photos/" . $profilePhotoName;

                //Validated
                $result_id = $this->userModel->addUser($data);


                $data['user_id'] = (int) $result_id;

                // This will be detected with some api but randomly now
                $card_type = [
                    1 => 'Amex',
                    2 => 'Mastercard',
                    3 => 'Visa'
                ];

                $data['card_type'] = $card_type[rand(1, 3)];

                $card_result = $this->userModel->addUserCardDetails($data);

                // echo '<pre>';
                // var_dump($card_result);
                // echo '</pre>';
                // exit();

                if ($result_id != false && $card_result == true) {


                    flash('user_message', 'User added successfully.', 'alert alert-success alert-dismissible fade show');
                    redirect('pages/dashboard');
                } else {
                    flash('user_message', 'User addition failed, please try again later', 'alert alert-danger alert-dismissible fade show');
                    redirect('pages/dashboard');
                }
            } else {

                $data['title'] = 'Task One';

                $this->view('inc/header', $data);
                $this->view('pages/task_one', $data);
                $this->view('inc/footer', $data);
            }
        } else {
            //Init data

            $data = [
                'title' => 'Task One',
            ];

            $this->view('inc/header', $data);
            $this->view('pages/task_one', $data);
            $this->view('inc/footer', $data);
        }
    }

    public function about()
    {
        $data = ['title' => 'About Us'];

        $this->view('pages/about', $data);
    }
}
