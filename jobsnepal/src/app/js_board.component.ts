import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';
import { NgFor } from '@angular/common';

@Component({
  selector: 'app-js_board',
  templateUrl: './js_board.component.html',
  styles: [''],
  providers: [UserService]
})
export class JS_BoardComponent implements OnInit{
  id:string;
  title: string;
  category: string;
  no_of_vacancies: string;
  experience_required: string;
  job_mode: string;
  salary:string;
  qualification:string;
  apply_before:string;
  address:string;
  description:string;
  remarks:string;
  skills:string;

  results = [];
  constructor(private userService:UserService) {
	  
	}

	ngOnInit() {
	  this.results = [];
	  this.getpost();
	}
  getpost() {
    
	  var result = this.userService.get_board()
    .subscribe(res => {
      this.results = res;
      console.log(res);
    });
	}

	
}