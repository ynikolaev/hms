<?php
$config = array(
        'p_editprofile' => array(
                array(
                        'field' => 'p_username',
                        'label' => 'Username',
                        'rules' => 'trim|strip_tags|alpha_numeric|min_length[4]|max_length[12]',
			'errors' => array(
				'min_length' => 'Your %s must be at least 4 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'p_pword',
                        'label' => 'Password',
                        'rules' => 'trim|strip_tags|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]',
			'errors' => array(
				'regex_match' => '%s must contain minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet and 1 Number'
				)
                ),
                array(
                        'field' => 'p_conpword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|matches[p_pword]',
			'errors' => array(
				'matches' => 'Your Passwords do not match'
				)
                ),
                array(
                        'field' => 'p_email',
                        'label' => 'Email',
                        'rules' => 'trim|strip_tags|valid_email|is_unique[Patients.email]',
			'errors' => array(
				'is_unique' => '%s is already exists'
				)
                ),
                array(
                        'field' => 'p_age',
                        'label' => 'Age',
                        'rules' => 'trim|strip_tags'
                ),
                array(
                        'field' => 'p_fname',
                        'label' => 'Firstname',
                        'rules' => 'trim|strip_tags|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'p_sname',
                        'label' => 'Surname',
                        'rules' => 'trim|strip_tags|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'p_weight',
                        'label' => 'Weight',
                        'rules' => 'trim|strip_tags|numeric|greater_than[1]|less_than[300]',
			'errors' => array(
				'greater_than' => 'Your weight cannot be 0, nice joke',
				'less_than' => 'Your weight cannot be more than 300kg, nice joke'
				)
		),
                array(
                        'field' => 'p_height',
                        'label' => 'Height',
                        'rules' => 'trim|strip_tags|numeric|greater_than[1]|less_than[300]',
			'errors' => array(
				'greater_than' => 'Your height cannot be 0, nice joke',
				'less_than' => 'Your height cannot be more than 300cm, nice joke'
				)
		),
                array(
                        'field' => 'p_gender',
                        'label' => 'Gender',
                        'rules' => 'trim|strip_tags'
		),
                array(
                        'field' => 'p_address',
                        'label' => 'Address',
                        'rules' => 'strip_tags',
			'errors' => array(
				'strip_tags' => 'No code lines in %s'
				)
		),
                array(
                        'field' => 'p_telephone',
                        'label' => 'Telephone',
                        'rules' => 'trim|strip_tags|regex_match[/^[0-9]{10}$/]',
			'errors' => array(
				'regex_match' => '%s must contain 10 digits number'
				)
		)
        ),
        'd_editprofile' => array(
        		array(
                        'field' => 'd_username',
                        'label' => 'Username',
                        'rules' => 'trim|strip_tags|alpha_numeric|min_length[4]|max_length[12]',
			'errors' => array(
				'min_length' => 'Your %s must be at least 4 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'd_pword',
                        'label' => 'Password',
                        'rules' => 'trim|strip_tags|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]',
			'errors' => array(
				'regex_match' => '%s must contain minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet and 1 Number'
				)
                ),
                array(
                        'field' => 'd_conpword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|matches[d_pword]',
			'errors' => array(
				'matches' => 'Your Passwords do not match1'
				)
                ),
                array(
                        'field' => 'd_email',
                        'label' => 'Email',
                        'rules' => 'trim|strip_tags|valid_email|is_unique[Doctors.email]|is_unique[Patients.email]',
			'errors' => array(
				'is_unique' => '%s is already exists'
				)
                ),
                array(
                        'field' => 'd_age',
                        'label' => 'Age',
                        'rules' => 'trim|strip_tags'
                ),
                array(
                        'field' => 'd_fname',
                        'label' => 'Firstname',
                        'rules' => 'trim|strip_tags|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'd_sname',
                        'label' => 'Surname',
                        'rules' => 'trim|strip_tags|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'd_speciality',
                        'label' => 'Speciality',
                        'rules' => 'trim|strip_tags|numeric'
		),
                array(
                        'field' => 'd_gender',
                        'label' => 'Gender',
                        'rules' => 'trim|strip_tags'
		),
                array(
                        'field' => 'd_address',
                        'label' => 'Address',
                        'rules' => 'strip_tags',
			'errors' => array(
				'strip_tags' => 'No code lines in %s'
				)
		),
                array(
                        'field' => 'd_telephone',
                        'label' => 'Telephone',
                        'rules' => 'trim|strip_tags|regex_match[/^[0-9]{10}$/]',
			'errors' => array(
				'regex_match' => '%s must contain 10 digits number'
				)
		)
        ),
        'login' => array(
                array(
                        'field' => 'uname',
                        'label' => 'Username',
                        'rules' => 'trim|required|alpha_numeric|min_length[4]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 4 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'pword',
                        'label' => 'Password',
                        'rules' => 'trim|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]',
			'errors' => array(
				'required' => '%s is required',
				'regex_match' => '%s is not acceptable. '
				)
                )
        ),
        'patient' => array(
                array(
                        'field' => 'p_username',
                        'label' => 'Username',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[4]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 4 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'p_pword',
                        'label' => 'Password',
                        'rules' => 'trim|strip_tags|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]',
			'errors' => array(
				'required' => '%s is required',
				'regex_match' => '%s must contain minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet and 1 Number'
				)
                ),
                array(
                        'field' => 'p_conpword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|strip_tags|required|matches[p_pword]',
			'errors' => array(
				'required' => '%s is required',
				'matches' => 'Your Passwords do not match'
				)
                ),
                array(
                        'field' => 'p_email',
                        'label' => 'Email',
                        'rules' => 'trim|strip_tags|required|valid_email|is_unique[Doctors.email]|is_unique[Patients.email]|is_unique[Doctors.email]',
			'errors' => array(
				'required' => '%s is required',
				'is_unique' => '%s is already exists'
				)
                ),
                array(
                        'field' => 'p_age',
                        'label' => 'Age',
                        'rules' => 'trim|strip_tags|required',
			'errors' => array(
				'required' => '%s is required'
				)
                ),
                array(
                        'field' => 'p_fname',
                        'label' => 'Firstname',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'p_sname',
                        'label' => 'Surname',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'p_weight',
                        'label' => 'Weight',
                        'rules' => 'trim|strip_tags|required|numeric|greater_than[1]|less_than[300]',
			'errors' => array(
				'required' => '%s is required',
				'greater_than' => 'Your weight cannot be 0, nice joke',
				'less_than' => 'Your weight cannot be more than 300kg, nice joke'
				)
		),
                array(
                        'field' => 'p_height',
                        'label' => 'Height',
                        'rules' => 'trim|strip_tags|required|numeric|greater_than[1]|less_than[300]',
			'errors' => array(
				'required' => '%s is required',
				'greater_than' => 'Your height cannot be 0 or below, nice joke',
				'less_than' => 'Your height cannot be more than 300cm, nice joke'
				)
		),
                array(
                        'field' => 'p_gender',
                        'label' => 'Gender',
                        'rules' => 'trim|strip_tags|required',
			'errors' => array(
				'required' => '%s is required'
				)
		),
                array(
                        'field' => 'p_address',
                        'label' => 'Address',
                        'rules' => 'required|strip_tags',
			'errors' => array(
				'required' => '%s is required',
				'strip_tags' => 'No code lines in %s'
				)
		),
                array(
                        'field' => 'p_telephone',
                        'label' => 'Telephone',
                        'rules' => 'trim|strip_tags|required|regex_match[/^[0-9]{10}$/]',
			'errors' => array(
				'required' => '%s is required',
				'regex_match' => '%s must contain 10 digits number'
				)
		)
        ),
        'doctor' => array(
                array(
                        'field' => 'd_username',
                        'label' => 'Username',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[4]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 4 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'd_pword',
                        'label' => 'Password',
                        'rules' => 'trim|strip_tags|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]',
			'errors' => array(
				'required' => '%s is required',
				'regex_match' => '%s must contain minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet and 1 Number'
				)
                ),
                array(
                        'field' => 'd_conpword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|strip_tags|required|matches[d_pword]',
			'errors' => array(
				'required' => '%s is required',
				'matches' => 'Your Passwords do not match'
				)
                ),
                array(
                        'field' => 'd_email',
                        'label' => 'Email',
                        'rules' => 'trim|strip_tags|required|valid_email|is_unique[Doctors.email]|is_unique[Patients.email]|is_unique[Doctors.email]',
			'errors' => array(
				'required' => '%s is required',
				'is_unique' => '%s is already exists'
				)
                ),
                array(
                        'field' => 'd_age',
                        'label' => 'Age',
                        'rules' => 'trim|strip_tags|required',
			'errors' => array(
				'required' => '%s is required'
				)
                ),
                array(
                        'field' => 'd_fname',
                        'label' => 'Firstname',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'd_sname',
                        'label' => 'Surname',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[3]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 3 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'd_speciality',
                        'label' => 'Speciality',
                        'rules' => 'trim|strip_tags|required|numeric',
			'errors' => array(
				'required' => '%s is required'
				)
		),
                array(
                        'field' => 'd_gender',
                        'label' => 'Gender',
                        'rules' => 'trim|strip_tags|required',
			'errors' => array(
				'required' => '%s is required'
				)
		),
                array(
                        'field' => 'd_address',
                        'label' => 'Address',
                        'rules' => 'required|strip_tags',
			'errors' => array(
				'required' => '%s is required',
				'strip_tags' => 'No code lines in %s'
				)
		),
                array(
                        'field' => 'd_telephone',
                        'label' => 'Telephone',
                        'rules' => 'trim|strip_tags|required|regex_match[/^[0-9]{10}$/]',
			'errors' => array(
				'required' => '%s is required',
				'regex_match' => '%s must contain 10 digits number'
				)
		)
        ),
        'admin' => array(
                array(
                        'field' => 'a_username',
                        'label' => 'Username',
                        'rules' => 'trim|strip_tags|required|alpha_numeric|min_length[4]|max_length[12]',
			'errors' => array(
				'required' => '%s is required',
				'min_length' => 'Your %s must be at least 4 char long',
				'max_length' => 'Your %s must be max 12 char long'
				)
                ),
                array(
                        'field' => 'a_pword',
                        'label' => 'Password',
                        'rules' => 'trim|strip_tags|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]',
			'errors' => array(
				'required' => '%s is required',
				'regex_match' => '%s must contain minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet and 1 Number'
				)
                ),
                array(
                        'field' => 'a_conpword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|strip_tags|required|matches[a_pword]',
			'errors' => array(
				'required' => '%s is required',
				'matches' => 'Your Passwords do not match'
				)
                )
        )
 );
?>
