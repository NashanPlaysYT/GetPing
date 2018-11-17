<?php
# plugin hecho por NashanPlaysYT :3
namespace NashanPlays\GetPing;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class GetPing extends PluginBase implements Listener {
	public function onEnable()
	{
		  $this->getLogger()->info("§eGetPing creado por NashanPlaysYT");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
        public function onCommand(CommandSender $sender, Command $cmd, $label, array $args): bool { 
        	switch($cmd->getName()) {
        	case "ping":
        $ping = $sender->getPing();
        $sender->sendMessage("§a[§bPing§a] §eTu §3Ping §ees de §6". $ping. " §ems");
        $sender->sendTip("§aPlugin creado por NashanPlays");
        return true;
       } 
    }
}
