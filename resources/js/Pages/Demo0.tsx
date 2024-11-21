import ShopNavbar from "@/Components/ShopNavBar"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"

export default function Home() {
  return (
    <div>
      <ShopNavbar />
      <div className="bg-black h-[200px] rounded mt-10 p-10 flex flex-col gap-10 w-2/3 mx-auto">
        <Input placeholder="goo"/>
        <Button>Click me</Button>
      </div>
    </div>
    
  )
}
