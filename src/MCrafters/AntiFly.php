<?php

namespace Mcrafters;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\utils\Listener;
use pocketmine\Player;
use Pocketmine\Server;

class Main extends PluginBase Implements Listener {

   public function onEnable() {
     $this->getLogger()->info("Enabled");
   }
