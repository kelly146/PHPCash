<?php
    class init{
        private $count=0,$mani,$money,$dot,$gfg,$m;
        function __construct(){

        }
        function filtermoney($money,$currency){
            $this->money=strval($money);
            $this->m="";
            if(strpos($this->money,".")>-1){
                $this->gfg=strpos($money,".");
            }else{
                $this->gfg=strlen($this->money);
            }
            $this->mani=array();
            $this->count=0;
            $this->dot="";
            if(strpos($this->money,"-")>-1){
                array_push($this->mani,"-");
                for($i=$this->gfg;$i>=0; $i--){
                    if($this->count==3){
                        if($i>1){
                            $this->m=",".substr($this->money,$i,1).$this->m;
                            $this->count=1;
                        }else{
                            $this->m=substr($this->money,$i,1).$this->m;
                        }
                    }else{
                        $this->m=substr($this->money,$i,1).$this->m;
                        $this->count++;
                    }
                }
                if(strpos($this->money,".")>-1){
                    for($i=$this->gfg+1;$i<strlen($this->money); $i++){
                        $this->dot.=substr($this->money,$i,1);
                    }
                }
            }else{
                array_push($this->mani,"");
                for($i=$this->gfg;$i>=0; $i--){
                    if($this->count==3){
                        if($i>0){
                            $this->m=",".substr($this->money,$i,1).$this->m;
                            $this->count=1;
                        }else{
                            $this->m=substr($this->money,$i,1).$this->m;
                        }
                    }else{
                        $this->m=substr($this->money,$i,1).$this->m;
                        $this->count++;
                    }
                }
                if(strpos($this->money,".")>-1){
                    for($i=$this->gfg+1;$i<strlen($this->money); $i++){
                        $this->dot.=substr($this->money,$i,1);
                    }
                }
            }
            $this->m.=$this->dot;
    
            
            if(strpos($this->money,"-")>-1){
                $this->m='<span class="text-danger">'."₦".ltrim($this->m,"-").'</span>';
            }else{
            $this->m=$currency.ltrim($this->m,"-");
            }
            array_push($this->mani,$this->m);
            return $this->mani;
    
        }
        function __destruct(){
            unset($mani,$money,$currency,$dot,$m,$gfg,$i);
        }

    }
?>