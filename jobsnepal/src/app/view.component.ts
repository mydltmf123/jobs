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
    private userService:UserService) {
	}

	ngOnInit() {
    this.results = [];
    var $this= this;
    this.routes.params.subscribe(params=>{
      //console.log(params['id']);
      $this.getpost(params['id']);
    });
      //this.getpost();
	}
    getpost(id) {
        
      var result = this.userService.getpost()
        .subscribe(res => {
          this.results = res;
          console.log(res);
         // console.log( ng get(contact.board_id));
        });
     }
    
}