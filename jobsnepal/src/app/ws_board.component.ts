import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';
import { NgFor } from '@angular/common';

@Component({
  selector: 'app-ws_board',
  templateUrl: './ws_board.component.html',
  styles: [''],
  providers: [UserService]
})
export class WS_BoardComponent implements OnInit{
  board_id: string;
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
    
	  var result = this.userService.get_ws_post()
    .subscribe(res => {
      this.results = res;
      console.log(res);
    });
	}

	
}