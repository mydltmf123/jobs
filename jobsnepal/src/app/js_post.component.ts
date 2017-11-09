import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';

@Component({
  selector: 'app-js_post',
  templateUrl: './js_post.component.html',
  styles: [''],
  providers: [UserService]
})
export class JS_PostComponent implements OnInit{
  user_id: string;
  user_name: string;
  subject: string;
  content: string;
  reg_date: string;

  results = [];
  constructor(private userService:UserService) {
	  
	}

	ngOnInit() {
	  this.results = [];
	  this.getpost();
	}
  getpost() {
	  this.userService.get_js_post()
	  .subscribe(res => console.log(res));
	}

	addpost(employer_id, title, category, no_of_vacancies, experience_required, job_mode, salary, qualification, apply_before, address, description, remarks, skills) {
		var data = {
			employer_id: employer_id,
			title: title, 
			category: category, 
			no_of_vacancies: no_of_vacancies, 
			experience_required: experience_required, 
			job_mode: job_mode, 
			salary: salary, 
			qualification: qualification, 
			apply_before: apply_before, 
			address: address, 
			description: description, 
			remarks: remarks, 
			skills: skills
			
		};
	  var result = this.userService.addpost(data)
	    .subscribe(res => {
	    	if(res.success == "true") {
					this.results.unshift(data);
					location.replace("/board"); 
				}
				//this.name = "";
				//this.passwd = "";
	      console.log(res);
	  });
	}
}