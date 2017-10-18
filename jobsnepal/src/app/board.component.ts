import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';
import { NgFor } from '@angular/common';

@Component({
  selector: 'app-board',
  templateUrl: './board.component.html',
  styles: [''],
  providers: [UserService]
})
export class BoardComponent implements OnInit{
  board_id: string;
  user_id: string;
  user_name: string;
  subject: string;
  content: string;
  reg_date: string;

  results = [];
  constructor(private ws_boardService:UserService) {
	  
	}

	ngOnInit() {
	  this.results = [];
	  this.getpost();
	}
  getpost() {
    
	  var result = this.ws_boardService.getpost()
    .subscribe(res => {
      this.results = res;
      console.log(res);
    });
	}

	
}