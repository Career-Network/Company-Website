
      const len = 150;
      const deskripsi = document.getElementsByClassName("desc");
      for (let i = 0; i < deskripsi.length; i++) {
        const text = deskripsi[i].innerHTML;
        if(text.length > len){
          var trunc = text.substring(0, len).replace(/\w+$/, '');
          var remainder = "";
          var id = deskripsi[i].id;
          remainder = text.substring(len, text.length);
          deskripsi[i].innerHTML = '<span>' + trunc + '<span class="hidden" id="' + id + 'Overflow">'+ remainder +'</span></span>&nbsp;<a class="moreBtn" id="' + id + 'MoreLink" href="#!" onclick="showMore(\''+ id + '\');">Load More</a><a class="hidden" href="#!" id="' + id + 'LessLink" onclick="showLess(\''+ id + '\');">Show Less</a>';
        }
      }

      function showMore(id){
        document.getElementById(id+'Overflow').className='';
        document.getElementById(id+'MoreLink').className='hidden';
        document.getElementById(id+'LessLink').className='moreBtn';
      }

      function showLess(id){
        document.getElementById(id+'Overflow').className='hidden';
        document.getElementById(id+'MoreLink').className='moreBtn';
        document.getElementById(id+'LessLink').className='hidden';
      }