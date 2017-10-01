<?php

namespace EoflaOE\ForeverTime;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\network\protocol\SetTimePacket;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
            case "timestuck": {
                if(isset($args[0])){
                	  if(isset($args[1]) and $args[1] === "morning"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickday = 0;
                	  	        $method = $this->getServer()->getLevelByName($args[0])->setTime($tickday);
                	  	        $method2 = $this->getServer()->getLevelByName($args[0])->stopTime();
            	  	            $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  } elseif(isset($args[1]) and $args[1] === "night"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $ticknight = 14000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($ticknight);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "noon"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $ticknoon = 6000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($ticknoon);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "afternoon"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickanoon = 9000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickanoon);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "dusk"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickdusk = 12000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickdusk);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	}elseif(isset($args[1]) and $args[1] === "dawn"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickdusk = 22550;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickdusk);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
<?php

namespace EoflaOE\ForeverTime;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\config\Config;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\network\protocol\SetTimePacket;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onEnable(){
    	    @mkdir($this->getDataFolder());
    	    $this->saveDefaultConfig();
    	    $this->reloadConfig();
    	    $this->checkTime();
    }
    
    public function checkTime(){
    	   foreach($this->getServer()->getLevels() as $l){
    		     if($this->getConfig()->get($l) == 0){
    		         $this->getServer()->getLevelByName($l)->setTime(0);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) == 14000){
    		         $this->getServer()->getLevelByName($l)->setTime(14000);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) == 6000){
    		         $this->getServer()->getLevelByName($l)->setTime(6000);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) == 9000){
    		         $this->getServer()->getLevelByName($l)->setTime(9000);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) == 12000){
    		         $this->getServer()->getLevelByName($l)->setTime(12000);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) == 22550){
    		         $this->getServer()->getLevelByName($l)->setTime(22550);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) == 18000){
    		         $this->getServer()->getLevelByName($l)->setTime(18000);
    		         $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->c->get($l) . " ticks.");
    		     } else if($this->getConfig()->get($l) != 0 or $this->getConfig()->get($l) != 18000 or $this->getConfig()->get($l) != 12000 or $this->getConfig()->get($l) != 22550 or $this->getConfig()->get($l) != 9000 or $this->getConfig()->get($l) != 6000 or $this->getConfig()->get($l) != 14000){
    		     	  $this->getServer()->getLevelByName($l)->setTime($this->getConfig()->get($l));
    		     	  $this->getLogger()->info(TextFormat::GREEN . "The level " . $l . " has been set to " . $this->getConfig()->get($l) . " ticks.");
    		     } else {
    		     	  $this->getLogger()->info(TextFormat::RED . "No entry for levels has been set.");
    		     }
      	 }
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
            case "timestuck": {
                if(isset($args[0])){
                	  if(isset($args[1]) and $args[1] === "morning"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickday = 0;
                	  	        $method = $this->getServer()->getLevelByName($args[0])->setTime($tickday);
                	  	        $method2 = $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $tickday);
            	  	            $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  } elseif(isset($args[1]) and $args[1] === "night"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $ticknight = 14000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($ticknight);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $ticknight);
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "noon"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $ticknoon = 6000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($ticknoon);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $ticknoon);
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "afternoon"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickanoon = 9000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickanoon);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $tickanoon);
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "dusk"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickdusk = 12000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickdusk);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $tickdusk);
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	}elseif(isset($args[1]) and $args[1] === "dawn"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickdawn = 22550;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickdawn);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $tickdawn);
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "midnight"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickmnight = 18000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickmnight);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $tickmnight);
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "custom"){
                	  		if(isset($args[2])){
                	  			$ticks = $args[2];
                	  		  if(is_numeric($ticks)){
                	  				$this->getServer()->getLevelByName($args[0])->setTime($ticks);
                	  				$this->getServer()->getLevelByName($args[0])->stopTime();
                	  				$this->getConfig()->set($this->getServer()->getLevelByName($args[0]), $ticks);
                	  				$sender->sendMessage(TextFormat::GREEN . "Time has stuck in " . TextFormat::AQUA . $ticks);
                	  				$sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  			} else {
                	  					$sender->sendMessage(TextFormat::RED . "Ticks must be numeric.");
                	  		  }
                	  		}
                	  	} else {
                	  			$sender->sendMessage(TextFormat::AQUA . "Custom ticks usage: /timestuck <level> <custom> <tick: numeric>");
                	  }
                	  
                	  } else {
                	  		
                	  		  $sender->sendMessage(TextFormat::AQUA . "Usage: /timestuck <level> <morning|noon|afternoon|night|midnight|dawn|dusk|custom>");
                	  	
                	  		  
                	  	}
                	  	
                }
                
              }
                
            }
                	  	
            
  }
