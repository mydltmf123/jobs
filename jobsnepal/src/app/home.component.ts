import { Component, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styles: ['']
})
export class HomeComponent implements OnInit{
    title = 'Jobs';
    
      image = '/assets/image/job.jpg';
      images='/assets/image';
      currentUser: UserService;
      
  
      constructor(private userService: UserService) {
<<<<<<< HEAD
          
=======
          this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
>>>>>>> 09973eba0109faa4db74e08dc1001bfb2421ba47
      }
    
    ngOnInit(): void {
      this.loadAllUsers();
      
    }
    private loadAllUsers() {
<<<<<<< HEAD
      this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
      this.currentUser.getAll().subscribe(res => console.log(res));
  }
}  
=======
      this.userService.getAll().subscribe(res => console.log(res));
  }
}	
>>>>>>> 09973eba0109faa4db74e08dc1001bfb2421ba47
