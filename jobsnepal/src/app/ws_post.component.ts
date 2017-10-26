import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';

@Component({
  selector: 'app-ws_post',
  templateUrl: './ws_post.component.html',
  styles: [''],
  providers: [UserService]
})
export class WS_PostComponent implements OnInit{
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
	  this.ws_boardService.getpost()
	  .subscribe(res => console.log(res));
	}

	addpost(user_id, user_name, subject, content, reg_date) {
		var data = {
      user_id: user_id,
      user_name: user_name,
      subject: subject,
      content: content,
      reg_date: reg_date
			
		};
	  var result = this.ws_boardService.addpost(data)
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