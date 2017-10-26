import { Component, Inject, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap} from '@angular/router';
import { Location }          from '@angular/common';
import { UserService } from './service/user.service';
@Component({
  selector: 'app-view',
  templateUrl: './view.component.html',
  styles: [''],
  providers: [UserService]
})

export class ViewComponent implements OnInit{
    user_id: string;
    user_name: string;
    subject: string;
    content: string;
    reg_date: string;
  results = [];
  constructor(private routes:ActivatedRoute,
    private ws_boardService:UserService) {
	}

	ngOnInit() {
    this.results = [];
    this.routes.params.subscribe(params=>{
      //console.log(params['id']);
      this.getpost(params['id']);
    });
      //this.getpost();
	}
    getpost() {
        
          var result = this.ws_boardService.getpost()
        .subscribe(res => {
          this.results = res;
          console.log(res);
         // console.log( ng get(contact.board_id));
        });
}
}